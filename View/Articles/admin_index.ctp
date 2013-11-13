<div class="articles index">
	<h2><?php echo __('Articulos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('editor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('edition_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('relevancia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['titulo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['Editor']['nombre'], array('controller' => 'editors', 'action' => 'view', $article['Editor']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['estado']==1?'Activo':'Inactivo'); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['Edition']['nombre'], array('controller' => 'editions', 'action' => 'view', $article['Edition']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($article['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $article['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($article['Relevancia']['nombre'], array('controller' => 'relevancias', 'action' => 'view', $article['Relevancia']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['created']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $article['Article']['id']),array('class'=>'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $article['Article']['id']),array('class'=>'btn btn-info')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $article['Article']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, Mostrando {:current} registros de {:count} total, Iniciando registros en {:start}, Finalizando en {:end}')
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('List Editors'), array('controller' => 'editors', 'action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('New Editor'), array('controller' => 'editors', 'action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('List Editions'), array('controller' => 'editions', 'action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('New Edition'), array('controller' => 'editions', 'action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>
