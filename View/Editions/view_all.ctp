<div id="contentBody" class="row">
	<div class="editTop">
		<div class="edit largeL columns">
			<a href="<?php echo $this->Html->url(array('controller'=>'Editions','action'=>'view','title'=>$lastEdition['Edition']['id'].'-'.$lastEdition['Edition']['permalink'])); ?>">
				<div class="image">
					<?php echo $this->Html->image(
			    		'/files/'.$lastEdition['Image']['seccion'].'/'.$lastEdition['Image']['id'].'.'.$lastEdition['Image']['extension'],
			    		array(
			    			'alt' => $lastEdition['Edition']['nombre'],
			    		)
			    	); ?>
					<div class="text">
						<div class="into">
							<h3><?php echo $lastEdition['Edition']['nombre']; ?></h3>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="largeR columns">
			<div id="slide">
				<ul data-orbit data-options="bullets:false;timer_speed:4000;resume_on_mouseout: true;slide_number: false;">
					<?php foreach ($articles as $a): ?>
					  	<li>		
					    	<a href="<?php echo $this->Html->url(array('controller'=>'Articles','action'=>'view','title'=>$a['Article']['id'].'-'.$a['Article']['permalink'])); ?>">
					    		<div class="image">
					    			<?php
									$widthLarge = 0;
									foreach ($a['Image'] as $I) {
										$src = $I['seccion'].'/'.$I['id'].'.'.$I['extension'];
										$this->Image->imagen(Configure::read('absolute_root').$src);
										$widthImg = $this->Image->image_width;
										if ($widthImg > $widthLarge) {
											$srcLarge = $src;
											$widthLarge = $widthImg;
										}
									}
									echo $this->Html->image(
							    		'/files/'.$srcLarge
							    	); ?>
					    		</div>
					    	</a>
					  	</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="Editions" class="editAll row">
		<?php foreach ($editions as $e): ?>
			
			<div class="edit large-3 columns">
				<a href="<?php echo $this->Html->url(array('controller'=>'Editions','action'=>'view','title'=>$e['Edition']['id'].'-'.$e['Edition']['permalink'])); ?>">
					<div class="image">
						<?php echo $this->Html->image(
				    		'/files/'.$e['Image']['seccion'].'/'.$e['Image']['id'].'.'.$e['Image']['extension'],
				    		array(
				    			'alt' => $e['Edition']['nombre'],
				    		)
				    	); ?>
						<div class="text">
							<h3><?php echo $e['Edition']['nombre']; ?></h3>
						</div>
					</div>
				</a>
			</div>

		<?php endforeach ?>
		
		<div class="clear" style="height:1.5em;"></div>

		<section class="pagination clear">
			<?php
			echo $this->paginator->prev('«', null, null, array('class' => 'disabled prev'));
		    echo $this->paginator->numbers(
		    	array(
		    		'separator'=>'',
		    		'tag'=>'span',
		    		'class'=>'numbers rad'
		    	)
		    ); 
		    echo $this->paginator->next('»', null, null, array('class' => 'disabled next'));
		    ?>
		</section>
	</div>
	<div class="pubIntoH">
		<?php echo $this->Html->image(
    		'/files/anuncio2.jpg'
    	); ?>
	</div>
</div>