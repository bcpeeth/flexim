<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image bg-lightgrey">
    <div class="grid__container">

        <div class="grid__col--6 grid__push--5 padding--top-step padding--bottom-step text--align-right">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
    </div>
</div>