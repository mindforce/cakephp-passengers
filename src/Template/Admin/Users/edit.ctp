<?php
/**
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) MindForce Team (http://mindforce.com)
* @link          http://mindforce.me Passengers CakePHP 3 Plugin
* @since         0.0.1
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
?>
<?php $this->extend('/Admin/Common/form'); ?>

<?php $this->assign('title', __d('passengers', 'Edit User')); ?>

<?php $this->assign('form_create', $this->Form->create($user)); ?>

<?php
	echo $this->Form->input('id');
	echo $this->Form->input('username', [
		'label' => __d('passengers', 'Username')
	]);
	echo $this->Form->input('email', [
		'label' => __d('passengers', 'Email')
	]);
	echo $this->Form->input('password_new', [
		'type' => 'password',
		'label' => __d('passengers', 'New Password'),
		'value' => false
	]);
	echo $this->Form->input('password_confirm', [
		'type' => 'password',
		'label' => __d('passengers', 'Password confirmation')
	]);
	echo $this->Form->input('role_id', [
		'label' => __d('passengers', 'Role for user'),
		'options' => $roles
	]);
	echo $this->Form->input('active', [
		'label' => __d('passengers', 'User is Active')
	]);
?>

<?= $this->Form->button(__d('passengers', 'Submit'), ['class' => 'btn btn-primary']); ?>

<?php $this->assign('form_end', $this->Form->end()); ?>

<?php $this->start('actions'); ?>
<div class="btn-group">
	<?= $this->Html->link(__d('passengers', 'List Users'), ['action' => 'index'], ['class' => 'btn btn-primary']); ?>
	<?= $this->Html->link(__d('passengers', 'List Roles'), ['controller' => 'Roles', 'action' => 'index'], ['class' => 'btn btn-default']); ?>
	<?= $this->Html->link(__d('passengers', 'New Role'), ['controller' => 'Roles', 'action' => 'add'], ['class' => 'btn btn-default']); ?>
	<?= $this->Html->link(__d('passengers', 'Delete'), ['action' => 'delete', $user->id], [
			'title' => __d('passengers', 'Are you sure you want to delete {0}?', $user->username),
			'class' => 'btn btn-danger btn-confirmation',
			'icon' => 'fa-trash-o']
		);
	?>
</div>
<?php $this->end(); ?>
