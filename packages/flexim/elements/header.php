<?php $ih = Core::make('helper/image'); ?>
<?php $c = Page::getCurrentPage(); ?>

<!doctype html>
<html lang="nl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php Loader::element('header_required'); ?>
  <link href="<?php echo $view->getThemePath(); ?>/dist/css/style.css?v=1.3" type="text/css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="<?php echo $view->getThemePath(); ?>/assets/images/favicon.png" />
 <!-- <link rel="stylesheet" href="//basehold.it/25"> -->
 <?php $u = new User(); if ($u->isLoggedIn() !== true) { ?>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
 <?php } ?>
</head>

<body>

  <div class="<?= $c->getPageWrapperClass() ?>">
    <div class="page__wrap">

      <section class="header clearfix" id="header">
        <div class="grid__container display--flex space-between">

            <div class="logo">
              <!-- <a class= "" href="<?php echo View::url('/'); ?>"><img class="no-margin" src="<?php echo $view->getThemePath(); ?>/assets/images/header_logo.svg"></a> -->
            </div>


            <nav class="navbar text--align-center">

            
              <div class="display--none">
                <input type="checkbox" name="toggle" class="navbar-toggle" id="toggle"/>
              </div>

              <label class="red display--none display--sm-block" for="toggle"><span></span></label>

                <?php
                  $a = new GlobalArea('Menu');
                  $a->display();
                ?>


              <ul>
                <li>
                  <a href="#home">De Stichting</a>
                </li>

                <li>
                  <a href="#news">Nieuws</a>
                </li>

                <li>
                  <a href="#news">Projecten</a>
                </li>

                <li>
                  <a class= "logo" href="<?php echo View::url('/'); ?>"><img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/logo-white-bg.png"></a>    
                </li>           
                

                <li>
                  <a href="#news">Informatie</a>
                </li>

                <li>
                  <a href="#home">Partners</a>
                </li>

                <li>
                  <a href="#home">Contact</a>
                </li>

              </ul>

            </nav>

        </div>
      </section>