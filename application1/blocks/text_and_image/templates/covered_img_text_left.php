
<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>


<div class="grid__container">
  <div class="padding--top-2-steps padding--bottom-2-steps">
      <div class="full-width-image position--relative clearfix">
          <?php  if ($imageContent) { ?>
              <div class="grid__col--12"><img src="<?php  echo $imageContent->getURL(); ?>" alt="<?php  echo $imageContent->getTitle(); ?>"/></div>
          <?php  } ?>

          <div class="grid__col--6 grid__col--md-8 grid__col--sm-12 bg-lightgrey floating-text-box floating-text-box--bottom-left position--absolute">
            <div class="padding--top-step padding--bottom-step padding--left-step padding--right-step">
              <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                  <?php  echo $textContent; ?>
              <?php  } ?>
            </div>
          </div>
      </div>
    </div>
</div>
