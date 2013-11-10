<div class="row">
	<nav class="top-bar">
	  	<ul class="title-area">
	    	<!-- Title Area -->
	    	<li class="name"></li>
	    	<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  	</ul>

	  	<section class="top-bar-section">
		    <!-- Left Nav Section -->
	    	<ul class="left">
	      		<li><a href="#">Inicio</a></li>
	      		<li><a href="#">Mujeres Destacadas</a></li>
	      		<li><a href="#">Cultura</a></li>
	      		<li><a href="#">Relaciones Interpersonales</a></li>
	      		<li><a href="#">Otros</a></li>
	      		<li><a href="#">Galer&iacute;as</a></li>
	      		<li><a href="#">Videos</a></li>
	      		<li><a href="#">Autores</a></li>
	    	</ul>
	  	</section>
	</nav>
	<div class="social">
		<?php 
		echo $this->Html->image(
			'facebook.png',
			array(
				'alt' => 'Facebook Alice Revista',
				'url' => 'https://www.facebook.com/pages/Revista-Alice/170806799626737'
			)
		);
		echo $this->Html->image(
			'twitter.png',
			array(
				'alt' => 'Twitter Alice Revista',
				'url' => 'https://www.twitter.com/'
			)
		); 
		?>
	</div>
	<div id="logo">
		<?php echo $this->Html->image(
			'logo_alice.png',
			array(
				'alt' => 'Logo Alice Revista',
				'url' => array(
					'controller' => 'home'
				)	
			)
		); ?>
	</div>
</div>