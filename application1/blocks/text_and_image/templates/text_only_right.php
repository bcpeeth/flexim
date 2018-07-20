<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="text-and-image">
    <div class="grid__container">

        <div class="grid__col--6 grid__push--5 grid__col--md-8 grid__push--md-4 grid__col--sm-12 padding--top-step text--align-right">
            <?php  if (isset($textContent) && trim($textContent) != "") { ?>
                <?php  echo $textContent; ?>
            <?php  } ?>
        </div>
    </div>
</div>