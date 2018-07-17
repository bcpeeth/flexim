<?php
/**
 * @var Concrete\Core\Entity\Attribute\Key\Key $ak
 * @var $objects
 * @var $object
 * @var callback $permissionsCallback
 * @var array $permissionsArguments
 * @var string $clearAction
 * @var string $saveAction
 * @var string $display
 */
if (isset($objects)) {
    foreach ($objects as $object) {
        $value = $object->getAttributeValueObject($ak);
        if (!is_object($value)) {
            $display = '';
        } else {
            $display = $value->getDisplayValue();
        }
        if (isset($lastDisplay) && $display != $lastDisplay) {
            $display = t('Multiple Values');
        }
        $lastDisplay = $display;
    }
} else {
    $value = $object->getAttributeValueObject($ak);
    if (is_object($value)) {
        $display = $value->getDisplayValue();
    } else {
        $display = '';
    }
}

$canEdit = $permissionsCallback($ak, $permissionsArguments);
?>
<div class="row">
    <div class="editable-attribute-wrapper">
        <div class="col-md-3">
            <p class="editable-attribute-display-name"><?php echo $ak->getAttributeKeyDisplayName() ?></p>
        </div>
        <div class="col-md-9"<?php if ($canEdit) { ?> data-editable-field-inline-commands="true"<?php } ?>>
            <div class="editable-attribute-field-inline">
                <?php if ($canEdit) { ?>
                    <ul class="ccm-edit-mode-inline-commands">
                        <li>
                            <a href="#" data-key-id="<?php echo $ak->getAttributeKeyID() ?>" data-url="<?php echo $clearAction ?>" data-editable-field-command="clear_attribute">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </li>
                    </ul>
                <?php } ?>
                <span
                    <?php if ($canEdit) { ?>
                        data-title="<?php echo $ak->getAttributeKeyDisplayName() ?>"
                        data-key-id="<?php echo $ak->getAttributeKeyID() ?>"
                        data-name="<?php echo $ak->getAttributeKeyID() ?>"
                        data-editable-field-type="xeditableAttribute"
                        data-url="<?php echo $saveAction ?>"
                        data-type="concreteattribute"
                        <?php echo $ak->getAttributeTypeHandle() === 'textarea' ? "data-editableMode='inline'" : ''; ?>
                    <?php } ?>
                    ><?php echo $display ?></span>
            </div>
        </div>
    </div>
</div>
<?php
if ($canEdit) {
    ?>
    <div style="display: none">
        <div data-editable-attribute-key-id="<?php echo $ak->getAttributeKeyID() ?>">
            <?php
            $value = $object->getAttributeValueObject($ak);
            $ak->render(new \Concrete\Core\Attribute\Context\DashboardFormContext(), $value);
            ?>
        </div>
    </div>
    <?php
}
