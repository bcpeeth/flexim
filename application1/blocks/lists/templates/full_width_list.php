<?php defined("C5_EXECUTE") or die("Access Denied."); ?>


  <div class="width--stretch bg-lightgrey padding--bottom-2-steps">
    <div class="grid__container">
      <div class="grid__col--10 grid__push--1 grid__col--md-12">
        <div class="list-horizontal">
          <?php if (isset($fullWidthList) && trim($fullWidthList) != "") { ?>
              <?php echo $fullWidthList; ?><?php } ?>
        </div>
      </div>
    </div>
  </div>


