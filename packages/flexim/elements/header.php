<?php $ih = Core::make('helper/image'); ?>
<?php $c = Page::getCurrentPage(); ?>

<!doctype html>
<html lang="nl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php Loader::element('header_required'); ?>
  <link href="<?php echo $view->getThemePath(); ?>/dist/css/style.css?v=1.3" type="text/css" rel="stylesheet" />
  <link href="<?php echo $view->getThemePath(); ?>/dist/css/animations.css?v=1.3" type="text/css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="<?php echo $view->getThemePath(); ?>/assets/images/favicon.png" />
  <link rel="stylesheet" href="/path/to/material-icons/iconfont/material-icons.css">
  <!-- <link rel="stylesheet" href="//basehold.it/25"> -->
</head>

<body>

    <div class="<?= $c->getPageWrapperClass() ?>">
        <div class="page__wrap">

        <header class="header" id="header">
            <div class="grid__container">

                <nav class="topnav" id="myTopnav">
                    <a href="<?php echo View::url('/'); ?>" class="active">De Stichting</a>
                    <a href="<?php echo View::url('nieuws'); ?>">Nieuws</a>
                    <a class="" href="">
                        <img class="logo" src="<?php echo $view->getThemePath(); ?>/assets/images/logo-white-bg.png">
                    </a>    
                    <a href="<?php echo View::url('projecten'); ?>">Projecten</a>
                    <a href="#about">Informatie</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </nav>
                
            </div>
        </header>