<div class="videos index">
	<h2><?php echo __('Videos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($videos as $video): ?>
	<tr>
		<td><?php echo h($video['Video']['id']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['url']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['titulo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $video['Video']['id']), array('class'=>'btn btn-info')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $video['Video']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $video['Video']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Video'), array('action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
	</ul>
</div>
