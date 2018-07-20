<?php defined("C5_EXECUTE") or die("Access Denied."); ?>
<div class="padding--top-2-steps display--block display--sm-none"></div>
<section class="ctablock <?php if ($backgroundImage) { ?>with-image<?php } else { ?>orange<?php } ?>">
  <?php if ($backgroundImage) { ?>
    <div class="ctablock__image">
      <img src="<?php echo $backgroundImage->getURL(); ?>" alt="<?php echo $backgroundImage->getTitle(); ?>"/>
    </div>
  <?php } ?>
  <?php if (isset($text) && trim($text) != "") { ?>
    <div class="grid__container ctablock__text">
      <div class="grid__col--8 grid__push--2 grid__col--sm-12">
        <?php echo $text; ?>
        <div class="padding--top-step">
          <?php
          if (trim($link_URL) != "") { ?>
              <?php
            $link_Attributes = [];
            $link_Attributes['href'] = $link_URL;
            $link_Attributes['class'] = 'cta';
            $link_AttributesHtml = join(' ', array_map(function ($key) use ($link_Attributes) {
              return $key . '="' . $link_Attributes[$key] . '"';
            }, array_keys($link_Attributes)));
            echo sprintf('<a %s>%s</a>', $link_AttributesHtml, $link_Title); ?><?php
          } ?>
        </div>
      </div>
    </div>
  <?php } ?>
</section>