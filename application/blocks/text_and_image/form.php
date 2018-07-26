<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php  echo $form->label('textNieuws', t("text-nieuws")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('textNieuws', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('textNieuws'), $textNieuws); ?>
</div>

<div class="form-group">
    <?php 
    if (isset($imgNieuws) && $imgNieuws > 0) {
        $imgNieuws_o = File::getByID($imgNieuws);
        if (!is_object($imgNieuws_o)) {
            unset($imgNieuws_o);
        }
    } ?>
    <?php  echo $form->label('imgNieuws', t("img-nieuws")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('imgNieuws', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make("helper/concrete/asset_library")->image('ccm-b-text_and_image-imgNieuws-' . $identifier_getString, $view->field('imgNieuws'), t("Choose Image"), $imgNieuws_o); ?>
</div>