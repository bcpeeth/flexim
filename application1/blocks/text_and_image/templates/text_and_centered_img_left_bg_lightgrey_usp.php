<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image bg-lightgrey">
    <div class="grid__container">
        <div class="grid__col--3 grid__push--1 grid__col--md-5 grid__push--md-0 grid__col--sm-12">
            <div class="image-wrapper">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>
        </div>
        <div class="grid__col--6 grid__push--1 padding--top-step grid__col--sm-12">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
    </div>
</div>