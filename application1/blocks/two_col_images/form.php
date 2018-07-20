<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($imageLeft) && $imageLeft > 0) {
        $imageLeft_o = File::getByID($imageLeft);
        if (!is_object($imageLeft_o)) {
            unset($imageLeft_o);
        }
    } ?>
    <?php echo $form->label($view->field('imageLeft'), t("image_left")); ?>
    <?php echo isset($btFieldsRequired) && in_array('imageLeft', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-two_col_images-imageLeft-' . $identifier_getString, $view->field('imageLeft'), t("Choose Image"), $imageLeft_o); ?>
</div>

<div class="form-group">
    <?php
    if (isset($imageRight) && $imageRight > 0) {
        $imageRight_o = File::getByID($imageRight);
        if (!is_object($imageRight_o)) {
            unset($imageRight_o);
        }
    } ?>
    <?php echo $form->label($view->field('imageRight'), t("image_right")); ?>
    <?php echo isset($btFieldsRequired) && in_array('imageRight', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-two_col_images-imageRight-' . $identifier_getString, $view->field('imageRight'), t("Choose Image"), $imageRight_o); ?>
</div>