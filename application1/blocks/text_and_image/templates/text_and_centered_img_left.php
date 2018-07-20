<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image">
    <div class="grid__container padding--bottom-2-steps">
        <div class="grid__col--4 text--align-right">
            <div class="image-wrapper">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>
        </div>
        <div class="grid__col--5 grid__push--6 text--align-right">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
    </div>
</div>