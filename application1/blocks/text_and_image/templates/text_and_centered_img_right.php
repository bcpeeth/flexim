<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image text-and-image__right list-horizontal">
    <div class="grid__container padding--top-3-steps padding--bottom-step">
        <div class="grid__col--6 grid__push--1 grid__push--md-0 grid__col--sm-12 padding--right-step padding__right--sm-none">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
        <div class="grid__col--4 grid__col--sm-12 text--align-right">
            <div class="image-wrapper">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>
        </div>
    </div>
</div>