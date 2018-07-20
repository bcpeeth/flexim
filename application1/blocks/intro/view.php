<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="intro">
    <div class="grid__container padding--top-2-steps padding--bottom-2-steps">
        <div class="grid__col--6">
            <?php  if (isset($introText) && trim($introText) != "") { ?>
                <?php  echo $introText; ?>
            <?php  } ?>
        </div>

        <div class="grid__col--6">
            <?php  if ($introImage) { ?>
                <img src="<?php  echo $introImage->getURL(); ?>" alt="<?php  echo $introImage->getTitle(); ?>"/>
            <?php  } ?>
        </div>
    </div>
</div>