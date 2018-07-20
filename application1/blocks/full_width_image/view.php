<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="full-width-image padding--top-3-steps padding--bottom-3-steps">
    <?php if ($fullWidthImage) { ?>
        <img src="<?php echo $fullWidthImage->getURL(); ?>" alt="<?php echo $fullWidthImage->getTitle(); ?>"/>
    <?php } ?>
</div>