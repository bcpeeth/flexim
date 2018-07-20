<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="padding--top-3-steps"></div>
<div class="text-and-absolute-image list-horizontal">
    <div class="grid__container">
        <div class="grid__col--6 grid__push--1 grid__push--md-0 grid__col--sm-12">
            <?php
            $imageBetweenText = '';
            if($imageContent){
              $imageBetweenText = '<img class="image-in-text padding--top-2-steps padding--bottom-2-steps display--none display--sm-block" src="'. $imageContent->getURL() .'" alt="'. $imageContent->getTitle() .'"/>';
            }
            ?>
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo str_replace("{{mobile.image.location}}",$imageBetweenText,$textContent); ?>
            <?php  } ?>
        </div>
        <div class="reveal-right image-wrapper image-wrapper--small-right grid__col--sm-12">
            <?php  if ($imageContent) { ?>
                <img class="display--block display--sm-none" src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
            <?php  } ?>
        </div>
    </div>
</div>
