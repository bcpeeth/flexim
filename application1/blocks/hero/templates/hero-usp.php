<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<section class="usp-hero">
  <?php if ($image) { ?>
    <div class="usp-hero__image">
      <img src="<?php echo $image->getURL(); ?>" alt="<?php echo $image->getTitle(); ?>"/>
    </div>
  <?php } ?>


  <div class="usp-hero__product padding--top-2-steps">
    <?php if (isset($text) && trim($text) != "") { ?>
      <div class="grid__container usp-hero__text ">
        <div class="grid__col--6 grid__push--6 grid__push--sm-1 text--align-left">
          <?php echo $text; ?>
        </div>
      </div>
    <?php } ?>
    <div class="image-container image-container--left">
      <a href="#"><img class="usp" src="<?php echo $view->getThemePath(); ?>/assets/images/usp1.png"></a>
     
    </div>
    
  </div>

</section>

