<?php

return [
	'attributes' => [
		'user' => 'user|users',
	],
	'header' => [
		'title' => 'Users',
		'edit_title' => 'Edit User',
		'store_title' => 'New User',
	],
	'table' => [
		'action_bar' => [
			'search_placeholder' => 'search',
			'select_all_records' => 'Select all records',
			'unselect_all_records' => 'Unselect all records',
			'hide_deleted' => 'Hide deleted',
			'show_deleted' => 'Show deleted',
			'bulk_actions_title' => 'Bulk Actions ...',
			'confirm_record_deletion' => 'Destroy',
			'restore_records' => 'Restore',
			'user' => 'User',
			'show' => 'Show',
			'apply' => 'Apply',
		],
		'headers' => [
			'name' => 'Name',
			'email_verified' => 'Email verified',
			'login_status' => 'Login status',
			'roles' => 'Roles',
			'status' => 'Status',
			'actions' => 'Actions',
		],
		'body' => [
			'last_login_at' => 'Last login',
			'active' => 'Active',
			'inactive' => 'Inactive',
			'email_verified' => 'Verified',
			'email_not_verified' => 'Not verified',
			'actions' => [
				'delete' => 'delete',
				'delete_forever' => 'delete forever',
				'edit' => 'edit',
				'restore' => 'restore',
				'quick_edit' => 'quick edit',
				'cancel' => 'cancel',
			],
		],
	],
	'entity' => [
		'edit_information_title' => 'General user information',
		'edit_information_description' => 'Update the user\'s profile information.',
		'store_information_title' => 'General user information',
		'store_information_description' => 'Update the user\'s profile information.',
		'name' => 'Name',
		'email' => 'Email',
		'status_title' => 'User Status',
		'status_description' => 'General user status information.',
		'active' => 'Active',
		'inactive' => 'Inactive',
		'created_at' => 'Created at',
		'updated_at' => 'Updated at',
		'save' => 'Save',
		'save_message' => 'Saved.',
	],
	'modal' => [
		'success' => 'Congratulations',
		'warning' => 'Warning',
		'action' => 'was|were',
		'user' => 'user|users',
		'import_success_message' => ':count :user :action imported successfully.',
		'import_warning_message' => 'No user was imported!',
		'options_success_message' => 'The user options were updated successfully.',
		'edit_success_message' => 'The user was update successfully.',
		'store_success_message' => 'The user was created successfully.',
		'delete_record_title' => 'Delete :attribute',
		'delete_record_content' => 'Are you sure you want to delete the selected :attribute? Once the :attribute is deleted, all of its resources and data will be deleted.|Are you sure you want to delete the selected :attribute? Once the :attribute are deleted, all of its resources and data will be deleted.',
		'delete_record_cancel' => 'Nevermind',
		'delete_record_confirm' => 'Delete the record',
	],
];
