<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($fullWidthImage) && $fullWidthImage > 0) {
        $fullWidthImage_o = File::getByID($fullWidthImage);
        if (!is_object($fullWidthImage_o)) {
            unset($fullWidthImage_o);
        }
    } ?>
    <?php echo $form->label($view->field('fullWidthImage'), t("Full Width Image")); ?>
    <?php echo isset($btFieldsRequired) && in_array('fullWidthImage', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-full_width_image-fullWidthImage-' . $identifier_getString, $view->field('fullWidthImage'), t("Choose Image"), $fullWidthImage_o); ?>
</div>