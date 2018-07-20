<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-absolute-image">
    <div class="grid__container">

        <div class=" grid__col--sm-12 image-wrapper image-wrapper--medium-left reveal-left display--block display--sm-none">
            <?php  if ($imageContent) { ?>
                <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
            <?php  } ?>
        </div>

        <div class="grid__col--5 grid__push--7 grid__col--sm-12 grid__push--sm-0 padding--left-step padding--top-step text-wrapper reveal-right">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>

        <div class=" grid__col--sm-12 image-wrapper image-wrapper--medium-left reveal-left display--none display--sm-block">
            <?php  if ($imageContent) { ?>
                <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
            <?php  } ?>
        </div>
    </div>
</div>
