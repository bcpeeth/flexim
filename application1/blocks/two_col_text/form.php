<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php echo $form->label($view->field('textLeft'), t("text_left")); ?>
    <?php echo isset($btFieldsRequired) && in_array('textLeft', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('textLeft'), $textLeft); ?>
</div>

<div class="form-group">
    <?php echo $form->label($view->field('textRight'), t("text_right")); ?>
    <?php echo isset($btFieldsRequired) && in_array('textRight', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('textRight'), $textRight); ?>
</div>