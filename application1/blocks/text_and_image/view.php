<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($textContent) && trim($textContent) != "") { ?>
    <?php echo $textContent; ?><?php } ?>
<?php if ($imageContent) { ?>
    <img src="<?php echo $imageContent->getURL(); ?>" alt="<?php echo $imageContent->getTitle(); ?>"/><?php } ?>