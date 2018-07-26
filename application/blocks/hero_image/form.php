<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php 
    if (isset($heroImage) && $heroImage > 0) {
        $heroImage_o = File::getByID($heroImage);
        if (!is_object($heroImage_o)) {
            unset($heroImage_o);
        }
    } ?>
    <?php  echo $form->label('heroImage', t("hero_image")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('heroImage', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make("helper/concrete/asset_library")->image('ccm-b-hero_image-heroImage-' . $identifier_getString, $view->field('heroImage'), t("Choose Image"), $heroImage_o); ?>
</div>