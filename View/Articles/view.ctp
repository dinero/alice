<div id="contentBody" class="row">

	<?php if (isset($article) and !empty($article) and $article != ''): ?>
		
		<section class="articleInto large-9 columns">
			<div class="share">
				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
				<div class="twitter">
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
				</div>
			</div>
			<div class="artAuthor">
				<span><?php echo $article['Editor']['nombre']; ?></span>
			</div>
			<div class="clear"></div>
			<div class="imageInto">
				<?php
				$widthLarge = 0;
				foreach ($article['Image'] as $I) {
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
			<div class="intro">
				<?php echo $article['Article']['intro']; ?>
			</div>
			<article class="artText">
				<?php echo $article['Article']['contenido']; ?>
			</article>
		</section>
		<aside class="asideR large-3 columns">
			<div class="otherArt">
				<span class="title">Otros art&iacute;culos de la edici&oacute;n</span>
				<div>
					<?php foreach ($moreOfEdition as $E): ?>
						<a class="other" href="<?php echo $this->Html->url(array('controller'=>'Articles','action'=>'view','title'=>$E['Article']['id'].'-'.$E['Article']['permalink'])); ?>">
							<div class="image">
								<?php
								$widthSmall = 1280;
								foreach ($E['Image'] as $I) {
									$src = $I['id'].'.'.$I['extension'];
									$this->Image->imagen(Configure::read('absolute_root').$I['seccion'].'/'.$src);
									$widthImg = $this->Image->image_width;
									if ($widthImg < $widthSmall) {
										$srcSmall = $src;
										$widthSmall = $widthImg;
									}
								}
				    			echo $this->Html->image(
						    		'/files/'.$I['seccion'].'/'.'thumbs/'.$srcSmall
						    	); ?>
							</div>
							<div class="text">
								<h4><?php echo $E['Article']['titulo']; ?></h4>
							</div>
						</a>
					<?php endforeach ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="public">
				<?php echo $this->Html->image(
				'/files/pub1.jpg',
				array(
					'alt' => 'Publicidad 1',
					'url' => array(
						'controller' => 'home'
					)	
				)
			); ?>
			<?php echo $this->Html->image(
				'/files/pub2.jpg',
				array(
					'alt' => 'Publicidad 2',
					'url' => array(
						'controller' => 'home'
					)	
				)
			); ?>
			</div>
		</aside>
		<div class="clear"></div>
		<aside class="asideB">
			<div class="title columns">
				<span>Otros articulos del Autor</span>
			</div>
			<div class="content columns">
				<ul>
					<?php foreach ($moreOfEditor as $Ed): ?>
						<li class="otherB">
							<a href="<?php echo $this->Html->url(array('controller'=>'Articles','action'=>'view','title'=>$Ed['Article']['id'].'-'.$Ed['Article']['permalink'])); ?>">
								<?php
								$widthSmall = 1280;
								foreach ($Ed['Image'] as $I) {
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
								<div class="title">
									<h4><?php echo $Ed['Article']['titulo']; ?></h4>
								</div>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="clear"></div>
		</aside>

	<?php else: ?>

		<?php echo $this->Element('error_404'); ?>

	<?php endif ?>
	
	<div class="pubIntoH">
		<?php echo $this->Html->image(
    		'/files/anuncio2.jpg'
    	); ?>
	</div>

</div>