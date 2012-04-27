<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Cake Bunny: '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
		    '/bootstrap/css/bootstrap.min',
		    'start/jquery-ui-1.8.14.custom'
		));
		
		echo $this->Html->script(array(
		    'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
		    'jquery-ui-1.8.14.custom.min'
		));

		echo $scripts_for_layout;
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
</head>
<body>
	<?php echo $this->element('navigation'); ?>

	<div class="container">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

	<footer class="footer">
		<?php echo $this->Html->link(
				$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
		?>
	</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>