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
  <!-- <link rel="stylesheet" href="//basehold.it/25"> -->
</head>

<body>

  <div class="<?= $c->getPageWrapperClass() ?>">
    <div class="page__wrap">

      <section class="header" id="header">
        <div class="grid__container display--flex space-between">

            <div class="logo">
              <!-- <a class= "" href="<?php echo View::url('/'); ?>"><img class="no-margin" src="<?php echo $view->getThemePath(); ?>/assets/images/header_logo.svg"></a> -->
            </div>


            <nav class="navbar text--align-center">

            
              <div class="display--none">
                <input type="checkbox" name="toggle" class="navbar-toggle" id="toggle"/>
              </div>

              <label class="red display--none display--sm-block" for="toggle"><span></span></label>

                <!-- <?php
                  $a = new GlobalArea('Menu');
                  $a->display();
                ?> -->

              <ul>
                <li>
                  <a class= "" href="<?php echo View::url('/'); ?>">De Stichting</a>
                  
                </li>

                <li>
                  <a class= "" href="<?php echo View::url('/nieuws'); ?>">Nieuws</a>
                </li>

                <li>
                  <a class= "" href="<?php echo View::url('/projecten'); ?>">Projecten</a>
                </li>

                <li>
                  <a class= "logo" href="<?php echo View::url('/'); ?>"><img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/logo-white-bg.png"></a>    
                </li>           
                

                <li>
                  <a class= "" href="<?php echo View::url('/informatie'); ?>">Informatie</a>
                </li>

                <li>
                  <a class= "" href="<?php echo View::url('/partners'); ?>">Partners</a>
                </li>

                <li>
                  <a class= "" href="<?php echo View::url('/contact'); ?>">Contact</a>
                </li>

              </ul>

            </nav>

        </div>
      </section>