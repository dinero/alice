<div class="abouts form">
<?php echo $this->Form->create('About'); ?>
	<fieldset>
		<legend><?php echo __('Add About'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('contenido');
		echo $this->Form->input('permalink');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Abouts'), array('action' => 'index')); ?></li>
	</ul>
</div>
