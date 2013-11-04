<ul class="bs-glyphicons">
	<li>
		<div class="headWrappers">
			<div class="glyphiconWrapper">
				<span class="glyphicon glyphicon-align-justify"></span>
			</div>
			<div class="titleWrapper">
				<span>Categorias</span>	
			</div>
		</div>
		<div class="linksWrapper">
			<a href="<?php echo $this->Html->url('/admin/categorias'); ?>" class="btn btn-info"><i class="glyphicon glyphicon-play"></i> Ver Categorias</a>
    		<a href="#" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Agregar Categoria</a>
		</div>
	</li>
    <li>
		<div class="headWrappers">
			<div class="glyphiconWrapper">
				<span class="glyphicon glyphicon-globe"></span>
			</div>
			<div class="titleWrapper">
				<span>Paquetes</span>	
			</div>
		</div>
		<div class="linksWrapper">
			<a href="<?php echo $this->Html->url('/admin/packages');?>" class="btn btn-info"><i class="glyphicon glyphicon-play"></i> Ver Paquetes</a>
    		<a href="#" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Agregar Paquete</a>
		</div>
	</li>
	<li>
		<div class="headWrappers">
			<div class="glyphiconWrapper">
				<span class="glyphicon glyphicon-user"></span>
			</div>
			<div class="titleWrapper">
				<span>Usuarios</span>	
			</div>
		</div>
		<div class="linksWrapper">
			<a href="<?php echo $this->Html->url('/admin/users');?>" class="btn btn-info"><i class="glyphicon glyphicon-play"></i> Ver Usuarios</a>
    		<a href="#" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Agregar Usuario</a>
		</div>
	</li>
	
</ul>