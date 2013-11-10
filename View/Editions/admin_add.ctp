<div class="editions form">
<?php echo $this->Form->create('Edition'); ?>
	<fieldset>
		<legend><?php echo __('Editar Edición'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('user_id',array('class'=>'form-control', 'value'=>$dataUser['User']['username'],'type'=>'text','disabled'=>'disabled'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listas Ediciones'), array('action' => 'index'), array('class'=>'btn btn-success')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Articulos'), array('controller' => 'articles', 'action' => 'index'), array('class'=>'btn btn-success')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Articulo'), array('controller' => 'articles', 'action' => 'add'), array('class'=>'btn btn-success')); ?> </li>
	</ul>
</div>
