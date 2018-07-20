<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image text-and-image__right list-horizontal">
    <div class="grid__container">
        <div class="grid__col--8 grid__push--1 grid__push--md-0 grid__col--md-12 padding--right-step">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
    </div>
</div>

<!-- .text-and-image__right:not(:first-child) {
    padding-bottom: 0;
} -->