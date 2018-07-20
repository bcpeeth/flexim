<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<section class="hero-footer">
<?php if ($image) { ?>
  <div class="hero-footer__image">
    <img src="<?php echo $image->getURL(); ?>" alt="<?php echo $image->getTitle(); ?>"/>
  </div>
<?php } ?>
<?php if (isset($text) && trim($text) != "") { ?>
  <div class="grid__container hero__text">
    <div class="grid__col-12">
      <?php echo $text; ?>
    </div>
  </div>
<?php } ?>
</section>
