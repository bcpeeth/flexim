<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="two-col-text">
    <div class="grid__container grid__col--no-gutter">
        
        <div class="grid__col--4 grid__push--1 grid__col--md-5 grid__col--sm-12">
            <div class="two-col-text--left">
                <?php if (isset($textLeft) && trim($textLeft) != "") { ?>
                <?php echo $textLeft; ?>
                <?php } ?>
            </div>
        </div>

        <div class="grid__col--4 grid__push--1 grid__col--md-5 grid__push--md-1 grid__col--sm-12">
            <div class="two-col-text--right text">
                <?php if (isset($textRight) && trim($textRight) != "") { ?>
                <?php echo $textRight; ?>
                <?php } ?>
            </div>
        </div>

    </div>
</div>
