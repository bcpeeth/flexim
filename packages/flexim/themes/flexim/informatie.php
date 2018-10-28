<?php Loader::packageElement('header', 'flexim'); ?>
<div class="hero__image">
  <?php 
    $a = new Area('HeroImage');
    $a->display();
  ?>
</div>
<div class="information">
  <div class="grid__container padding--top-step padding--bottom-step">
    <div class="grid__col--4 grid__col--sm-12">
      <?php 
        $a = new Area('col-1');
        $a->display();
      ?>
    </div>
    <div class="grid__col--4 grid__col--sm-12">
      <?php 
        $a = new Area('col-2');
        $a->display();
      ?>
    </div>
    <div class="grid__col--4 grid__col--sm-12">
      <?php 
        $a = new Area('col-3');
        $a->display();
      ?>
    </div>
  </div>
</div>

<div class="partners">
  <div class="grid__container">
    <div class="grid__col--12">
  
          <?php 
            $a = new Area('PartnerWorden');
            $a->display();
          ?>
        
      </div>
    </div>
</div>
<?php Loader::packageElement('footer', 'flexim'); ?>
