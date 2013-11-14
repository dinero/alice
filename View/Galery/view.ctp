<div id="contentBody" class="row">

	<?php if (!empty($galery)): ?>
		
		<div class="galeryCont">
			<div class="large-12 columns">
				<h1><?php echo $galery['Albume']['nombre']; ?></h1>
				<?php foreach ($galery['Image'] as $Img) {
					
					echo $this->Html->image(
			    		'/files/'.$Img['seccion'].'/'.$Img['id'].'.'.$Img['extension'],
			    		array(
			    			'class' => 'galImg'
			    		)
			    	);	

				} ?>
			</div>
			<div class="clear"></div>
		</div>
		
	<?php endif ?>

	<?php if (!empty($otherG)): ?>

		<div class="galBottom">
			<h4 class="titleB">Otras Galer&iacute;as</h4>
			<div class="content">

				<?php foreach ($otherG as $oG): ?>
					
					<div class="otherB large-4 small-6 columns">
						<a href="<?php echo $this->Html->url(array('controller'=>'Galery','action'=>'view','title'=>$oG['Albume']['id'].'-'.$oG['Albume']['permalink'])); ?>">
							<div class="image">
								<?php echo $this->Html->image(
						    		'/files/'.$oG['Image'][0]['seccion'].'/thumbs/'.$oG['Image'][0]['id'].'.'.$oG['Image'][0]['extension']
						    	); ?>
								<div class="text">
									<h3><?php echo $oG['Albume']['nombre']; ?></h3>
								</div>
							</div>
						</a>
					</div>
					
				<?php endforeach ?>

			</div>
			<div class="clear"></div>
		</div>
		
	<?php endif ?>

	<?php if (!empty($pubAlbH['Image'])): ?>

		<div class="pubIntoH">
			<?php echo $this->Html->image(
	    		'/files/'.$pubAlbH['Image']['seccion'].'/'.$pubAlbH['Image']['id'].'.'.$pubAlbH['Image']['extension'],
	    		array(
	    			'alt' => $pubAlbH['Ad']['nombre'],
	    			'url' => $pubAlbH['Ad']['link']
	    		)
	    	); ?>
		</div>
		
	<?php endif ?>

</div>