<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php  if (isset($textNieuws) && trim($textNieuws) != "") { ?>
    <?php  echo $textNieuws; ?><?php  } ?>
<?php  if ($imgNieuws) { ?>
    <img src="<?php  echo $imgNieuws->getURL(); ?>" alt="<?php  echo $imgNieuws->getTitle(); ?>"/><?php  } ?>