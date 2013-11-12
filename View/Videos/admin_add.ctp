<div class="videos form">
<?php echo $this->Form->create('Video',array('inputDefaults' => array('required' => false))); ?>
	<fieldset>
		<legend><?php echo __('Add Video'); ?></legend>
	<?php
		echo $this->Form->input('titulo',array('class'=>'form-control'));
		echo $this->Form->input('url',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
	</ul>
</div>
