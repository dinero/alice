<div class="editors index">
	<h2><?php echo __('Editores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($editors as $editor): ?>
	<tr>
		<td><?php echo h($editor['Editor']['id']); ?>&nbsp;</td>
		<td><?php echo h($editor['Editor']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $editor['Editor']['id']), array('class'=>'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $editor['Editor']['id']), array('class'=>'btn btn-info')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $editor['Editor']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $editor['Editor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Editor'), array('action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Listar Articulos'), array('controller' => 'articles', 'action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Articulo'), array('controller' => 'articles', 'action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>
