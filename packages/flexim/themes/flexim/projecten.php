<?php Loader::packageElement('header', 'flexim'); ?>

<div class="hero__image">
  <?php 
    $a = new Area('HeroImage');
    $a->display();
  ?>
</div>

  <?php 
    $a = new Area('Projecten');
    $a->display();
  ?>
  

<div class="projecten padding--top-3-steps padding--bottom-3-steps text--align-center bg-red">
  <div class="grid__container">
    <div class="grid__col--3 grid__col--md-6">  
      <h4>Type 1</h4>
      </br>
      <p>Kortlopende projecten die weinig tot geen voorbereiding vragen (1 á 2 dagen).</p>                         
    </div>

    <div class="grid__col--3 grid__col--md-6">  
      <h4>Type 2</h4>
      </br>
      <p>Projecten die geen voorbereiding vragen maar voornamelijk op locatie worden uitgevoerd (2 – 5 dagen).</p>    
    </div>

    <div class="grid__col--3 grid__col--md-6">  
      <h4>Type 3</h4>
      </br>
      <p>Internationale projecten die veel voorbereiding vragen en deels door derden worden uitgevoerd.</p>           
    </div>

    <div class="grid__col--3 grid__col--md-6">  
      <h4>Type 4</h4>
      </br>
      <p>Sponsorgeldacties.</p>                                
    </div>
  </div>
</div>

<section class="team">
  <div class="grid__container">
  <div class="grid__col--12 padding--top-3-steps padding--bottom-3-steps">
    <div class="photos text--align-center">

        <div class="col-3">

            <?php 
              $a = new Area('First ProjectTeam Picture');
              $a->display();
            ?>

            <?php 
              $a = new Area('First ProjectTeam Text');
              $a->display();
            ?>
        </div>

        <div class="col-3">

        <?php 
          $a = new Area('Second ProjectTeam Picture');
          $a->display();
        ?>

        <?php 
          $a = new Area('Second ProjectTeam Text');
          $a->display();
        ?>
        </div>

        <div class="col-3">

          <?php 
            $a = new Area('Third ProjectTeam Picture');
            $a->display();
          ?>

          <?php 
            $a = new Area('Third ProjectTeam Text');
            $a->display();
          ?>
        </div>
        </div>
    </div>
  </div>
</section>

<?php Loader::packageElement('footer', 'flexim'); ?>
