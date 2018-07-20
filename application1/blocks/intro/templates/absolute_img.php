<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="intro__absolute-image">
    <div class="grid__container padding--top-2-steps padding--bottom-2-steps">
        <div class="grid__col--6 grid__push--1">
            <?php  if (isset($introText) && trim($introText) != "") { ?>
                <?php  echo $introText; ?>
            <?php  } ?>
        </div>
        <div>
            <?php  if ($introImage) { ?>
                <img src="<?php  echo $introImage->getURL(); ?>" alt="<?php  echo $introImage->getTitle(); ?>"/>
            <?php  } ?>
        </div>
    </div>
</div>