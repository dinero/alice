<div id="contentBody" class="row">
	<section class="articleInto large-9 columns">
		<div class="share">
			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
			<div class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
			</div>
		</div>
		<div class="artAuthor">
			<span>Autor del articulo</span>
		</div>
		<div class="clear"></div>
		<div class="imageInto">
			<?php
			echo $this->Html->image(
				'/files/image.png',
				array(
					'alt' => 'Titulo del articulo'
				)
			);
			?>
		</div>
		<div class="intro">
			Johnny Depp y Kate Moss vuelven a reunirse Fueron una de las parejas más icónicas de los años 90's y ahora, gracias al nuevo vídeo de Paul McCartney, la unión es un hecho.
		</div>
		<article class="artText">
			<p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per.</p>
			<p>In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per. Ius id vidit volumus mandamus, vide veritus democritum te nec, ei eos debet libris consulatu. No mei ferri graeco dicunt, ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril meliore.</p>
			<p>Dicunt maiorum eloquentiam cum cu, sit summo dolor essent te. Ne quodsi nusquam legendos has, ea dicit voluptua eloquentiam pro, ad sit quas qualisque. Eos vocibus deserunt quaestio ei. Blandit incorrupte quaerendum in quo, nibh impedit id vis, vel no nullam semper audiam. Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat.</p>
			<p>Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo. Homero salutatus suscipiantur eum id, tamquam voluptaria expetendis ad sed, nobis feugiat similique usu ex. Eum hinc argumentum te, no sit percipit adversarium, ne qui feugiat persecuti. Odio omnes scripserit ad est, ut vidit lorem maiestatis his, putent mandamus gloriatur ne pro. Oratio iriure rationibus ne his, ad est corrumpit splendide. Ad duo appareat moderatius, ei falli tollit denique eos. Dicant evertitur mei in, ne his deserunt perpetua sententiae, ea sea omnes similique vituperatoribus. Ex mel errem intellegebat comprehensam, vel ad tantas antiopam delicatissimi, tota ferri affert eu nec. Legere expetenda pertinacia ne pro, et pro impetus persius assueverit.</p>
			<p>Ea mei nullam facete, omnis oratio offendit ius cu. Doming takimata repudiandae usu an, mei dicant takimata id, pri eleifend inimicus euripidis at. His vero singulis ea, quem euripidis abhorreant mei ut, et populo iriure vix. Usu ludus affert voluptaria ei, vix ea error definitiones, movet fastidii signiferumque in qui. Vis prodesset adolescens adipiscing te, usu mazim perfecto recteque at, assum putant erroribus mea in. Vel facete imperdiet id, cum an libris luptatum perfecto, vel fabellas inciderint ut. Veri facete debitis ea vis, ut eos oratio erroribus. Sint facete perfecto no vel, vim id omnium insolens. Vel dolores perfecto pertinacia ut, te mel meis ullum dicam, eos assum facilis corpora in.</p>
		</article>
	</section>
	<aside class="asideR large-3 columns">
		<div class="otherArt">
			<span class="title">Otros art&iacute;culos de la edici&oacute;n</span>
			<div>
				<a class="other" href="">
					<div class="image">
						<?php echo $this->Html->image(
					    	'/files/image2.png'
					    ); ?>
					</div>
					<div class="text">
						<h4>Titulo de un articulo cualquiera</h4>
					</div>
				</a>
				<a class="other" href="">
					<div class="image">
						<?php echo $this->Html->image(
					    	'/files/image2.png'
					    ); ?>
					</div>
					<div class="text">
						<h4>Titulo de un articulo cualquiera</h4>
					</div>
				</a>
				<a class="other" href="">
					<div class="image">
						<?php echo $this->Html->image(
					    	'/files/image2.png'
					    ); ?>
					</div>
					<div class="text">
						<h4>Titulo de un articulo cualquiera</h4>
					</div>
				</a>
				<a class="other" href="">
					<div class="image">
						<?php echo $this->Html->image(
					    	'/files/image2.png'
					    ); ?>
					</div>
					<div class="text">
						<h4>Titulo de un articulo cualquiera</h4>
					</div>
				</a>
				<a class="other" href="">
					<div class="image">
						<?php echo $this->Html->image(
					    	'/files/image2.png'
					    ); ?>
					</div>
					<div class="text">
						<h4>Titulo de un articulo cualquiera</h4>
					</div>
				</a>
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
			<span>Otros articulos del editor</span>
		</div>
		<div class="content columns">
			<ul>
				<li class="otherB">
					<a href="">
						<?php echo $this->Html->image(
				    		'/files/image2.png'
				    	); ?>
						<div class="title">
							<h4>Titulo de un articulo cualquiera</h4>
						</div>
					</a>
				</li>
				<li class="otherB">
					<a href="">
						<?php echo $this->Html->image(
				    		'/files/image2.png'
				    	); ?>
						<div class="title">
							<h4>Titulo de un articulo cualquiera</h4>
						</div>
					</a>
				</li>
				<li class="otherB">
					<a href="">
						<?php echo $this->Html->image(
				    		'/files/image2.png'
				    	); ?>
						<div class="title">
							<h4>Titulo de un articulo cualquiera</h4>
						</div>
					</a>
				</li>
				<li class="otherB">
					<a href="">
						<?php echo $this->Html->image(
				    		'/files/image2.png'
				    	); ?>
						<div class="title">
							<h4>Titulo de un articulo cualquiera</h4>
						</div>
					</a>
				</li>
				<li class="otherB">
					<a href="">
						<?php echo $this->Html->image(
				    		'/files/image2.png'
				    	); ?>
						<div class="title">
							<h4>Titulo de un articulo cualquiera</h4>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</aside>
	<div class="pubIntoH">
		<?php echo $this->Html->image(
    		'/files/anuncio2.jpg'
    	); ?>
	</div>
</div>