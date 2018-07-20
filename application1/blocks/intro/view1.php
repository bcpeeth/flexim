<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($introText) && trim($introText) != "") { ?>
    <?php echo $introText; ?><?php } ?>
<?php if ($introImage) { ?>
    <img src="<?php echo $introImage->getURL(); ?>" alt="<?php echo $introImage->getTitle(); ?>"/><?php } ?>