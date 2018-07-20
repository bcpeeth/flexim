<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image text-and-image__right list-horizontal bg-lightgrey padding--bottom-2-steps">
    <div class="grid__container">
        <div class="grid__col--8 grid__push--1 grid__push--md-0 grid__col--sm-12 padding--right-step">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
    </div>
</div>
