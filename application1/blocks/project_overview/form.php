<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php
    if (isset($imgRowTop) && $imgRowTop > 0) {
        $imgRowTop_o = File::getByID($imgRowTop);
        if (!is_object($imgRowTop_o)) {
            unset($imgRowTop_o);
        }
    } ?>
    <?php echo $form->label($view->field('imgRowTop'), t("img_row_top")); ?>
    <?php echo isset($btFieldsRequired) && in_array('imgRowTop', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-project_overview-imgRowTop-' . $identifier_getString, $view->field('imgRowTop'), t("Choose Image"), $imgRowTop_o); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('textAndImgRow'), t("text_and_img_row")); ?>
    <?php echo isset($btFieldsRequired) && in_array('textAndImgRow', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('textAndImgRow'), $textAndImgRow); ?>
</div>

<div class="form-group">
    <?php
    if (isset($imgRowBottom) && $imgRowBottom > 0) {
        $imgRowBottom_o = File::getByID($imgRowBottom);
        if (!is_object($imgRowBottom_o)) {
            unset($imgRowBottom_o);
        }
    } ?>
    <?php echo $form->label($view->field('imgRowBottom'), t("img_row_bottom")); ?>
    <?php echo isset($btFieldsRequired) && in_array('imgRowBottom', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-project_overview-imgRowBottom-' . $identifier_getString, $view->field('imgRowBottom'), t("Choose Image"), $imgRowBottom_o); ?>
</div>