<div class="editors view">
<h2><?php  echo __('Editor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($editor['Editor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($editor['Editor']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permalink'); ?></dt>
		<dd>
			<?php echo h($editor['Editor']['permalink']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($editor['Editor']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Editor'), array('action' => 'edit', $editor['Editor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Editor'), array('action' => 'delete', $editor['Editor']['id']), null, __('Are you sure you want to delete # %s?', $editor['Editor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Editors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Editor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articles'); ?></h3>
	<?php if (!empty($editor['Article'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Intro'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Permalink'); ?></th>
		<th><?php echo __('Editor Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Edition Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Relevancia Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($editor['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['id']; ?></td>
			<td><?php echo $article['titulo']; ?></td>
			<td><?php echo $article['intro']; ?></td>
			<td><?php echo $article['contenido']; ?></td>
			<td><?php echo $article['permalink']; ?></td>
			<td><?php echo $article['editor_id']; ?></td>
			<td><?php echo $article['estado']; ?></td>
			<td><?php echo $article['edition_id']; ?></td>
			<td><?php echo $article['categoria_id']; ?></td>
			<td><?php echo $article['relevancia_id']; ?></td>
			<td><?php echo $article['created']; ?></td>
			<td><?php echo $article['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($editor['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Permalink'); ?></th>
		<th><?php echo __('Editor Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Edicion Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Relevancia Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($editor['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['titulo']; ?></td>
			<td><?php echo $news['contenido']; ?></td>
			<td><?php echo $news['permalink']; ?></td>
			<td><?php echo $news['editor_id']; ?></td>
			<td><?php echo $news['estado']; ?></td>
			<td><?php echo $news['edicion_id']; ?></td>
			<td><?php echo $news['categoria_id']; ?></td>
			<td><?php echo $news['relevancia_id']; ?></td>
			<td><?php echo $news['fecha']; ?></td>
			<td><?php echo $news['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), null, __('Are you sure you want to delete # %s?', $news['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
