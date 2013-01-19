<?php
$cakeDescription = __d('cake_dev', 'Cake Bunny ');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            '/bootstrap/css/bootstrap.min',
            'jquery-ui-1.8.4.custom',
            'select2/select2'
        ));
        
        echo $this->Html->script(array(
            'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
            'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js',
            'bootstrap.min',
            'select2.min',
            'cbunny'
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        $cbunny = array(
            'APP_PATH' => Router::url('/',true)
        );
        echo $this->Html->scriptBlock('var CbunnyObj = ' . $this->Javascript->object($cbunny) . ';');
    ?>

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
</head>
<body>
    <?php echo $this->element('navigation'); ?>

    <div class="container">
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
