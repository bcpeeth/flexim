<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="grid__container">
<div class="grid__col--6">  
            <?php if ($imgRowTop) { ?>
                <img src="<?php echo $imgRowTop->getURL(); ?>" alt="<?php echo $imgRowTop->getTitle(); ?>"/><?php } ?>
                </div>
         <div class="grid__col--6">  
                <?php if (isset($textAndImgRow) && trim($textAndImgRow) != "") { ?>
                <?php echo $textAndImgRow; ?><?php } ?>
                </div>

            <?php if ($imgRowBottom) { ?>
                <img src="<?php echo $imgRowBottom->getURL(); ?>" alt="<?php echo $imgRowBottom->getTitle(); ?>"/><?php } ?>
    </div>