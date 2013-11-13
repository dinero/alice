<div class="albumes index">
	<h2><?php echo __('Albumes'); ?></h2>
	<?php /* ?><table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('permalink'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_publicacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($albumes as $albume): ?>
	<tr>
		<td><?php echo h($albume['Albume']['id']); ?>&nbsp;</td>
		<td><?php echo h($albume['Albume']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($albume['Albume']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($albume['Albume']['permalink']); ?>&nbsp;</td>
		<td><?php echo h($albume['Albume']['fecha_publicacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $albume['Albume']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $albume['Albume']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $albume['Albume']['id']), null, __('Are you sure you want to delete # %s?', $albume['Albume']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table> <?php */ ?>
	<?php foreach ($albumes as $a): ?>

			<div class="icon_dock">				
				<div>
					<?php echo $this->Html->tag('span',$a['Albume']['nombre'], array('class'=>'title_icon_dock')); ?>
					<?php echo $this->Html->image('admin/pictures_folder.png'); ?>
				</div>
				<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $a['Albume']['id']), array('class'=>'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $a['Albume']['id']), array('class'=>'btn btn-info')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $a['Albume']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $a['Albume']['id'])); ?>
			</div>

		<?php endforeach; ?>
		<div class="clear"></div>
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
		<li><?php echo $this->Html->link(__('Nuevo Album'), array('action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?></li>
	</ul>
</div>
