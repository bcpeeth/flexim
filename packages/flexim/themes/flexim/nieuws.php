<?php Loader::packageElement('header', 'flexim'); ?>

<section class="nieuws">


  <?php 
    $a = new Area('Nieuws Intro');
    $a->display();
  ?>

  
  <!-- <div class="nieuws-intro">
    <div class="grid__container padding--top-3-steps padding--bottom-3-steps">
      <div class="grid__col--10 grid__push--1">


        <h4 class=" text--align-center padding--bottom-nano">News intro title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


      </div>
    </div>
  </div> -->


  <?php 
    $a = new Area('Nieuws');
    $a->display();
  ?>
  

</section>

<?php Loader::packageElement('footer', 'flexim'); ?>
