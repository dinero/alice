<div id="slide">
	<ul data-orbit data-options="variable_height:true;bullets:false;timer_speed:4000;resume_on_mouseout: true;slide_number: false;">
		<?php foreach ($lastArticles as $lA): ?>
		  	<li>		
		    	<a href="<?php echo $this->Html->url(array('controller'=>'Articles','action'=>'view','title'=>$lA['Article']['id'].'-'.$lA['Article']['permalink'])); ?>">
		    		<div class="image">
		    			<?php
						$widthLarge = 0;
						foreach ($lA['Image'] as $I) {
							$src = $I['seccion'].'/'.$I['id'].'.'.$I['extension'];
							$this->Image->imagen(Configure::read('absolute_root').$src);
							$widthImg = $this->Image->image_width;
							if ($widthImg > $widthLarge) {
								$srcSmall = @$srcLarge;
								$srcLarge = $src;
								$widthLarge = $widthImg;
							} else {
								$srcSmall = $src;
							}
						}
		    			?>
		    			<img src="<?php echo $this->Html->url('/files/'.$srcLarge); ?>" data-interchange="[<?php echo $this->Html->url('/files/'.$srcSmall); ?>, (only screen and (min-width: 1px))], [<?php echo $this->Html->url('/files/'.$srcLarge); ?>, (only screen and (min-width: 769px))]">
		    		</div>
	    		<div class="edition-title">
	    			<h2><?php echo $lA['Article']['titulo']; ?></h2>
	    		</div>
	    	</a>
	  	</li>
		<?php endforeach ?>
	</ul>
</div>

<div id="container-body">
	<div class="pub-horizontal">
		<?php echo $this->Html->image(
    		'/files/anuncio1.jpg'
    	); ?>
	</div>
	<div class="article-title">
		<span>Articulos</span>
	</div>
	<div class="articles">
		<script type="text/javascript">
		    $(document).ready(function ($) {
		        $('.arts').perfectScrollbar({
		          	wheelSpeed: 20,
		          	wheelPropagation: false
		        });
		    });
	    </script>
		<div class="arts">
			<?php foreach ($lastArticles as $lA): ?>
				<div class="art">
					<a href="<?php echo $this->Html->url(array('controller'=>'Articles','action'=>'view','title'=>$lA['Article']['id'].'-'.$lA['Article']['permalink'])); ?>">
						<div class="image">
							<?php
							$widthSmall = 1280;
							foreach ($lA['Image'] as $I) {
								$src = $I['id'].'.'.$I['extension'];
								$this->Image->imagen(Configure::read('absolute_root').$I['seccion'].'/'.$src);
								$widthImg = $this->Image->image_width;
								if ($widthImg < $widthSmall) {
									$srcSmall = $src;
									$widthSmall = $widthImg;
								}
							}
			    			?>
							<?php echo $this->Html->image(
					    		'/files/'.$I['seccion'].'/'.'thumbs/'.$srcSmall
					    	); ?>
						</div>
						<div class="content">
							<h2><?php echo $lA['Article']['titulo']; ?></h2>
							<span class="editor"><?php echo $lA['Editor']['nombre']; ?></span>
							<div class="text">
								<?php echo $this->Text->truncate($lA['Article']['intro'], 200); ?>
							</div>
						</div>
					</a>
					<div class="clear"></div>
				</div>
			<?php endforeach ?>
		</div>
		<div class="pub">
			<div class="image">
				<a href="">
					<?php echo $this->Html->image(
			    		'/files/pub1.jpg'
			    	); ?>
				</a>
			</div>
			<div class="image">
				<a href="">
					<?php echo $this->Html->image(
			    		'/files/pub2.jpg'
			    	); ?>
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="pub-horizontal">
		<?php echo $this->Html->image(
    		'/files/anuncio2.jpg'
    	); ?>
	</div>
	<div class="editions row">
		<?php foreach ($lastEditions as $lE): ?>
			<div class="large-4 small-4 columns edition">
				<?php echo $this->Html->image(
		    		'/files/'.$lE['Image']['seccion'].'/'.$lE['Image']['id'].'.'.$lE['Image']['extension'],
		    		array(
		    			'alt' => $lE['Edition']['nombre'],
		    			'url' => array(
		    				'controller' => 'Editions',
		    				'action' => 'view',
		    				'title' => $lE['Edition']['id'].'-'.$lE['Edition']['permalink']
		    			)
		    		)
		    	); ?>
			</div>
		<?php endforeach ?>
	</div>
	<div class="article-title">
		<span>Galer&iacute;as</span>
	</div>
	<div class="galeries">
		<div class="gal row">
			<div class="large-4 small-6 columns">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/galery.png'
			    	); ?>
					<div class="text">
						<h4>Titulo de la Galeria</h4>
						<a href="">Continuar</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="large-4 small-6 columns">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/galery.png'
			    	); ?>
					<div class="text">
						<h4>Titulo de la Galeria</h4>
						<a href="">Continuar</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="large-4 small-6 columns">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/galery.png'
			    	); ?>
					<div class="text">
						<h4>Titulo de la Galeria</h4>
						<a href="">Continuar</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="large-4 small-6 columns">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/galery.png'
			    	); ?>
					<div class="text">
						<h4>Titulo de la Galeria</h4>
						<a href="">Continuar</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="large-4 small-6 columns">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/galery.png'
			    	); ?>
					<div class="text">
						<h4>Titulo de la Galeria</h4>
						<a href="">Continuar</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="large-4 small-6 columns">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/galery.png'
			    	); ?>
					<div class="text">
						<h4>Titulo de la Galeria</h4>
						<a href="">Continuar</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="pub">
			<a href="">
				<?php echo $this->Html->image(
		    		'/files/pub3.jpg'
		    	); ?>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="pub-horizontal">
		<?php echo $this->Html->image(
    		'/files/anuncio3.jpg'
    	); ?>
	</div>
</div>