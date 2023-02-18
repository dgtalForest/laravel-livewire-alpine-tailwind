<?php

namespace App\Actions\UserOption;

use App\Actions\UserOption\Base\BaseUserOptionAction;
use App\Http\Response\ResponseBuilder;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateAction extends BaseUserOptionAction
{
	protected string $action = 'update';

	/**
	 * @param array $args
	 * @return $this
	 * @throws Throwable
	 */
	public function execute(array $args = []): self
	{
		$user = Auth::user();

		// transaction
		DB::beginTransaction();
		try {

			$user = tap(
				$user,
				function(User $user) use ($args) {
					$user
						->options()
						->update([
							'params' => $args,
						]);
				});

			DB::commit();
		} catch (Throwable $e) {
			DB::rollback();
			throw $e;
		}

		$this->success = true;
		$this->data = $user->options->params;

		// post action
		$this->postAction();

		return $this;
	}

	/**
	 * @return void
	 */
	private function postAction(): void
	{
		if ($this->success) {
			// cache
			$this->flushModuleCache();
		}
	}

	/**
	 * @return ResponseBuilder
	 */
	public function withResponse(): ResponseBuilder
	{
		return ResponseBuilder::make()
			->setSuccess($this->success)
			->setActionMessage($this->action, $this->attribute, $this->success)
			->setData($this->data)
			->setErrors()
			->setStatusOk();
	}
}
