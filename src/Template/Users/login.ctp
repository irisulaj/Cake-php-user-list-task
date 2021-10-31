
<div class="col-md-4 col-md-offset-4 margin-auto d-flex align-items-center justify-center">
<?= $this->Form->create() ?>
<?= $this->Form->input('username', array(
      'label'=> '',
			'placeholder' => 'Username'
		) )?>
<?= $this->Form->input('password', array(
      'label'=> '',
			'placeholder' => 'Password'
		) ) ?>
<?= $this->Form->button('Submit', array(
      'class'=>'btn btn-success btn-block'
		) ) ?>
<?= $this->Form->end() ?>
</div>


