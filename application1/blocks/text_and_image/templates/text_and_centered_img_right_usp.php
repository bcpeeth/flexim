<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="grid__container padding--top-2-steps padding--bottom-2-steps">
    <div class="text-and-image text-and-image__right text-and-image__usp">

        <div class="grid__col--sm-12 display--none display--sm-block">
            <div class="usp-image-wrapper">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>
        </div>
        


        <div class="grid__col--5 grid__push--1 grid__col--md-6 grid__push--md-0 grid__col--sm-12 padding--right-step">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>


        <div class="grid__col--6 grid__col--sm-12 display--block display--sm-none">
            <div class="usp-image-wrapper">
                <?php  if ($imageContent) { ?>
                    <img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/>
                <?php  } ?>
            </div>
        </div>

        
    </div>
</div>