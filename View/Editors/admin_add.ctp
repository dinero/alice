<div class="editors form">
<?php echo $this->Form->create('Editor',array('inputDefaults' => array('required' => false))); ?>
	<fieldset>
		<legend><?php echo __('Agregar Editor'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Editors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
