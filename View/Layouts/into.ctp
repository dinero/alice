<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('normalize');
		echo $this->Html->css('foundation');
		echo $this->Html->css('default');
		echo $this->Html->css('perfect-scrollbar');

		echo $this->Html->script('zurb/vendor/custom.modernizr.js');
		echo $this->Html->script('zurb/vendor/jquery.js');
		echo $this->Html->script('zurb/foundation.min.js');
		echo $this->Html->script('jquery.mousewheel.js');
		echo $this->Html->script('perfect-scrollbar.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="row">
			<?php echo $this->element('header'); ?>
		</div>
		<div id="content">

			<?php //echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="row">
			<?php echo $this->element('footer'); ?>
		</div>
		<aside class="logoPiggy" class="row">
			Dise&ntilde;o y Desarrollo
			<?php
			echo $this->Html->image(
				'logoPiggy.png'
			);
			?>
		</aside>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<script>
	  	$(document).foundation();
	</script>
</body>
</html>
