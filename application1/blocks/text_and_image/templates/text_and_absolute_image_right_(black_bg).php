<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="bg-black bg-black--above"></div>
    <div class="bg-black text-and-absolute-image text-and-absolute-image__right">
        <div class="grid__container">

            <div class="image-wrapper image-wrapper--medium-right grid__col--7 grid__col--sm-12 reveal-right display--none display--sm-block">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>


            <div class="grid__col--5  grid__col--sm-12 text--align-right white padding--right-step padding--top-step padding--bottom-step reveal-left">
                <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                    <?php  echo $textContent; ?>
                <?php  } ?>
            </div>

            <div class="image-wrapper image-wrapper--medium-right grid__col--7 grid__col--sm-12 reveal-right display--block display--sm-none">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>

        </div>
    </div>
<div class="bg-black bg-black--below"></div>
