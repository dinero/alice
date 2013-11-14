<div class="editions index">
	<h2><?php echo __('Ediciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($editions as $edition): ?>
	<tr>
		<td><?php echo h($edition['Edition']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($edition['Edition']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($edition['User']['username'], array('controller' => 'users', 'action' => 'view', $edition['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $edition['Edition']['id']),array('class'=>'btn btn-info')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $edition['Edition']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $edition['Edition']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Edición'), array('action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Listar Articulos'), array('controller' => 'articles', 'action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Articulo'), array('controller' => 'articles', 'action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>
