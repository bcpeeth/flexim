<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('fullWidthList'), t("full-width-list")); ?>
    <?php echo isset($btFieldsRequired) && in_array('fullWidthList', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('fullWidthList'), $fullWidthList); ?>
</div>