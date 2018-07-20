<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('introText'), t("Intro Text")); ?>
    <?php echo isset($btFieldsRequired) && in_array('introText', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('introText'), $introText); ?>
</div>

<div class="form-group">
    <?php
    if (isset($introImage) && $introImage > 0) {
        $introImage_o = File::getByID($introImage);
        if (!is_object($introImage_o)) {
            unset($introImage_o);
        }
    } ?>
    <?php echo $form->label($view->field('introImage'), t("Intro Image")); ?>
    <?php echo isset($btFieldsRequired) && in_array('introImage', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make("helper/concrete/asset_library")->image('ccm-b-intro-introImage-' . $identifier_getString, $view->field('introImage'), t("Choose Image"), $introImage_o); ?>
</div>