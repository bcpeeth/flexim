<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('textContent'), t("Text Content")); ?>
    <?php echo isset($btFieldsRequired) && in_array('textContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('textContent'), $textContent); ?>
</div>

<div class="form-group">
    <?php
    if (isset($imageContent) && $imageContent > 0) {
        $imageContent_o = File::getByID($imageContent);
        if (!is_object($imageContent_o)) {
            unset($imageContent_o);
        }
    } ?>
    <?php echo $form->label($view->field('imageContent'), t("Image Content")); ?>
    <?php echo isset($btFieldsRequired) && in_array('imageContent', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-text_and_image-imageContent-' . $identifier_getString, $view->field('imageContent'), t("Choose Image"), $imageContent_o); ?>
</div>