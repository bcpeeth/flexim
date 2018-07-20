<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="two-col-photos text--align-center">
    <div class="grid__container grid__col--no-gutter padding--bottom-3-steps">
        <div class="grid__col--6">
            <div class="two-col-photos__left">
                <?php if ($imageLeft) { ?>
                    <img src="<?php echo $imageLeft->getURL(); ?>" alt="<?php echo $imageLeft->getTitle(); ?>"/>
                <?php } ?>
            </div>
        </div>
        <div class="grid__col--6">
            <div class="two-col-photos__right">
                <?php if ($imageRight) { ?>
                    <img src="<?php echo $imageRight->getURL(); ?>" alt="<?php echo $imageRight->getTitle(); ?>"/>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
