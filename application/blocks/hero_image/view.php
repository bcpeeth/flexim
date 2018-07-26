
<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<section class="hero">
    <?php if ($heroImage) { ?>
    <div class="hero__image">
        <img src="<?php echo $heroImage->getURL(); ?>" alt="<?php echo $heroImage->getTitle(); ?>"/>
    </div>
    <?php } ?>
</section>
