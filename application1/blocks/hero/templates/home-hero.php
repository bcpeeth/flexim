<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<section class="home-hero">

  <?php if ($image) { ?>
    <div class="home-hero__image">
      <img src="<?php echo $image->getURL(); ?>" alt="<?php echo $image->getTitle(); ?>"/>
    </div>
  <?php } ?>

  <!-- <img class="stripe" src="<?php echo $view->getThemePath(); ?>/assets/images/home_hero_stripe.png"> -->
  <div class="home-hero__product padding--top-2-steps">
    <?php if (isset($text) && trim($text) != "") { ?>
      <div class="grid__container home-hero__text ">
        <div class="grid__col--4 grid__push--8 grid__col--md-5 grid__push--md-7 grid__col--sm-12 text--align-right">
          <?php echo $text; ?>
          <div class="cta display--block display--sm-none">
            <a href="<?php echo View::url('/producten'); ?>">Bekijk Producten</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

</section>
