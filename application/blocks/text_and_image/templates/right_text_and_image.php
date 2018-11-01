<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="nieuws__block">
  <div class="nieuws__block-left">
    <?php  if ($imgNieuws) { ?>
        <img src="<?php  echo $imgNieuws->getURL(); ?>" alt="<?php  echo $imgNieuws->getTitle(); ?>"/>
    <?php  } ?>
  </div> 
  <div class="nieuws__block-right">
    <div class="grid__container grid__col--10 grid__push--1 flex__vertical-align">
      <div class="nieuws__block-text">
        <?php  if (isset($textNieuws) && trim($textNieuws) != "") { ?>
          <?php  echo $textNieuws; ?>
        <?php  } ?>
      </div>
    </div>
  </div>
</div>
