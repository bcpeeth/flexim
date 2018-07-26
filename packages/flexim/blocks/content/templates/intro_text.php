<?php
    defined('C5_EXECUTE') or die("Access Denied.");
    $c = Page::getCurrentPage();
    if (!$content && is_object($c) && $c->isEditMode()) {
        ?>
        <div class="ccm-edit-mode-disabled-item"><?=t('Empty Content Block.')?></div>

    <?php } else { ?>
      <div class="nieuws-intro">
    <div class="grid__container padding--top-3-steps padding--bottom-3-steps">
      <div class="grid__col--10 grid__push--1">


            <?php echo $content; ?>


          </div>
        </div>
      </div>
  <?php } ?>
