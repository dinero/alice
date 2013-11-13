<div class="ads index">
	<h2><?php echo __('Ads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('orientacion'); ?></th>
			<th><?php echo $this->Paginator->sort('bloque'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ads as $ad): ?>
	<tr>
		<td><?php echo h($ad['Ad']['id']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['link']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['orientacion']); ?>&nbsp;</td>
		<td><?php echo h($ad['Ad']['bloque']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ad['User']['username'], array('controller' => 'users', 'action' => 'view', $ad['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ad['Ad']['id']),array('class'=>'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ad['Ad']['id']),array('class'=>'btn btn-info')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ad['Ad']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $ad['Ad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ad'), array('action' => 'add'), array('class'=>'btn btn-success')); ?></li>
	</ul>
</div>
