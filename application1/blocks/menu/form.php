<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<?php $tabs = [
    ['form-basics-' . $identifier_getString, t('Basics'), true],
    ['form-linkRepeater_items-' . $identifier_getString, t('Link')]
];
echo Core::make('helper/concrete/ui')->tabs($tabs); ?>

<div class="ccm-tab-content" id="ccm-tab-content-form-basics-<?php echo $identifier_getString; ?>">
    <div class="form-group">
    <?php echo $form->label($view->field('title'), t("Title")); ?>
    <?php echo isset($btFieldsRequired) && in_array('title', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php echo $form->text($view->field('title'), $title, array (
  'maxlength' => 255,
)); ?>
</div>
</div>

<div class="ccm-tab-content" id="ccm-tab-content-form-linkRepeater_items-<?php echo $identifier_getString; ?>">
    <script type="text/javascript">
    var CCM_EDITOR_SECURITY_TOKEN = "<?php echo Core::make('helper/validation/token')->generate('editor')?>";
</script>
<?php $repeatable_container_id = 'btMenu-linkRepeater-container-' . $identifier_getString; ?>
    <div id="<?php echo $repeatable_container_id; ?>">
        <div class="sortable-items-wrapper">
            <a href="#" class="btn btn-primary add-entry">
                <?php echo t('Add Entry'); ?>
            </a>

            <div class="sortable-items" data-attr-content="<?php echo htmlspecialchars(
                json_encode(
                    [
                        'items' => $linkRepeater_items,
                        'order' => array_keys($linkRepeater_items),
                    ]
                )
            ); ?>">
            </div>

            <a href="#" class="btn btn-primary add-entry add-entry-last">
                <?php echo t('Add Entry'); ?>
            </a>
        </div>

        <script class="repeatableTemplate" type="text/x-handlebars-template">
            <div class="sortable-item" data-id="{{id}}">
                <div class="sortable-item-title">
                    <span class="sortable-item-title-default">
                        <?php echo t('Link') . ' ' . t("row") . ' <span>#{{id}}</span>'; ?>
                    </span>
                    <span class="sortable-item-title-generated"></span>
                </div>

                <div class="sortable-item-inner">            <?php $link_ContainerID = 'btMenu-link-container-' . $identifier_getString; ?>
<div class="ft-smart-link" id="<?php echo $link_ContainerID; ?>">
	<div class="form-group">
		<label for="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link]" class="control-label"><?php echo t("Link"); ?></label>
	    <?php echo isset($btFieldsRequired['linkRepeater']) && in_array('link', $btFieldsRequired['linkRepeater']) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
	    <?php $linkRepeaterLink_options = $link_Options; ?>
                    <select name="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link]" id="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link]" class="form-control ft-smart-link-type">{{#select link}}<?php foreach ($linkRepeaterLink_options as $k => $v) {
                        echo "<option value='" . $k . "'>" . $v . "</option>";
                     } ?>{{/select}}</select>
	</div>
	
	<div class="form-group">
		<div class="ft-smart-link-options hidden" style="padding-left: 10px;">
			<div class="form-group">
				<label for="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Title]" class="control-label"><?php echo t("Title"); ?></label>
			    <input name="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Title]" id="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Title]" class="form-control" type="text" value="{{ link_Title }}" />		
			</div>
			
			<div class="form-group hidden" data-link-type="page">
			<label for="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Page]" class="control-label"><?php echo t("Page"); ?></label>
            <small class="required"><?php echo t('Required'); ?></small>
            <div data-page-selector="{{token}}" data-input-name="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Page]" data-cID="{{link_Page}}"></div>
		</div>

		<div class="form-group hidden" data-link-type="url">
			<label for="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_URL]" class="control-label"><?php echo t("URL"); ?></label>
            <small class="required"><?php echo t('Required'); ?></small>
            <input name="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_URL]" id="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_URL]" class="form-control" type="text" value="{{ link_URL }}" />
		</div>

		<div class="form-group hidden" data-link-type="relative_url">
			<label for="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Relative_URL]" class="control-label"><?php echo t("URL"); ?></label>
            <small class="required"><?php echo t('Required'); ?></small>
            <input name="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Relative_URL]" id="<?php echo $view->field('linkRepeater'); ?>[{{id}}][link_Relative_URL]" class="form-control" type="text" value="{{ link_Relative_URL }}" />
		</div>
		</div>
	</div>
</div>
</div>

                <span class="sortable-item-collapse-toggle"></span>

                <a href="#" class="sortable-item-delete" data-attr-confirm-text="<?php echo t('Are you sure'); ?>">
                    <i class="fa fa-times"></i>
                </a>

                <div class="sortable-item-handle">
                    <i class="fa fa-sort"></i>
                </div>
            </div>
        </script>
    </div>

<script type="text/javascript">
    Concrete.event.publish('btMenu.linkRepeater.edit.open', {id: '<?php echo $repeatable_container_id; ?>'});
    $.each($('#<?php echo $repeatable_container_id; ?> input[type="text"].title-me'), function () {
        $(this).trigger('keyup');
    });
</script>
</div>