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

<?php $this->assign('title', __('Edit Role')); ?>

<?php $this->assign('form_create', $this->Form->create($role)); ?>

<?php
	echo $this->Form->input('id');
	echo $this->Form->input('title');
	echo $this->Form->input('slug');
	echo $this->Form->input('admin');
?>

<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']); ?>

<?php $this->assign('form_end', $this->Form->end()); ?>

<?php $this->start('actions'); ?>
<div class="btn-group">
	<?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'btn btn-primary']); ?>
	<?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-default']); ?>
	<?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-default']); ?>
	<?php if(!$role->core): ?>
		<?= $this->Html->link(__('Delete Role'), ['action' => 'delete', $role->id], ['title' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'btn btn-danger btn-confirmation', 'icon' => 'fa-trash-o']); ?>
	<?php endif; ?>
</div>
<?php $this->end(); ?>
