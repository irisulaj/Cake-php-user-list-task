<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], array(
			'class' => 'btn btn-warning',
            'style'=>'color:white;'

		)) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], array(
			'class' => 'btn btn-danger',
            'style'=>'color:white;'

		), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index'], array(
			'class' => 'btn btn-info',
            'style'=>'color:white;'

		)) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add'], array(
			'class' => 'btn btn-success',
            'style'=>'color:white;'
		)) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->enc_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enc Password') ?></th>
            <td><?= h($user->enc_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($user->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified At') ?></th>
            <td><?= h($user->modified_at) ?></td>
        </tr>
    </table>
</div>
