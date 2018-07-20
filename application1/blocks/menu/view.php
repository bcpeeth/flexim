<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<?php if (isset($title) && trim($title) != "") { ?>
    <h2><?php echo h($title); ?></h2>
<?php } ?>
<?php if (!empty($linkRepeater_items)) { ?>
<ul>
    <?php foreach ($linkRepeater_items as $linkRepeater_item_key => $linkRepeater_item) { ?><?php
if (trim($linkRepeater_item["link_URL"]) != "") { ?>
  <?php
	$linkRepeater_itemlink_Attributes = [];
	$linkRepeater_itemlink_Attributes['href'] = $linkRepeater_item["link_URL"];
	$linkRepeater_item["link_AttributesHtml"] = join(' ', array_map(function ($key) use ($linkRepeater_itemlink_Attributes) {
		return $key . '="' . $linkRepeater_itemlink_Attributes[$key] . '"';
	}, array_keys($linkRepeater_itemlink_Attributes)));
	echo sprintf('<li><a %s>%s</a></li>', $linkRepeater_item["link_AttributesHtml"], $linkRepeater_item["link_Title"]); ?><?php
} ?><?php } ?>
</ul><?php } ?>
