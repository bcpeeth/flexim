<?php Loader::packageElement('header', 'flexim'); ?>

<section class="nieuws">
  <div class="nieuws-intro">
  <div class="grid__container padding--top-3-steps padding--bottom-3-steps">
    <div class="grid__col--10 grid__push--1">
    <h4 class=" text--align-center padding--bottom-nano">News intro title</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    </div>
  </div>





    <?php 
      $a = new Area('Nieuws');
      $a->display();
    ?>
  
  <!-- <div class="nieuws__block-left">
    <div class="grid__container grid__col--10 grid__push--1 flex__vertical-align">
      <div class="nieuws__block-text">
        <h4>First news title</h4>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <div class="nieuws__block-right">
    <img class="path" src="<?php echo $view->getThemePath(); ?>/assets/images/nieuws1.jpg">
  </div> -->


<div class="nieuws__block">
  <div class="nieuws__block-left">
    <img class="path" src="<?php echo $view->getThemePath(); ?>/assets/images/nieuws2.jpg">
  </div>
  <div class="nieuws__block-right">
    <div class="grid__container grid__col--10 grid__push--1 flex__vertical-align">
      <div class="nieuws__block-text">
        <h4>Second news title</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

<div class="nieuws__block">
  <div class="nieuws__block-left">
    <div class="grid__container grid__col--10 grid__push--1 flex__vertical-align">
      <div class="nieuws__block-text">
        <h4>Third news title</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <div class="nieuws__block-right">
    <img class="path" src="<?php echo $view->getThemePath(); ?>/assets/images/nieuws3.jpg">
  </div>
</div>

<div class="nieuws__block">
  <div class="nieuws__block-left">
    <img class="path" src="<?php echo $view->getThemePath(); ?>/assets/images/nieuws2.jpg">
  </div>
  <div class="nieuws__block-right">
    <div class="grid__container grid__col--10 grid__push--1 flex__vertical-align">
      <div class="nieuws__block-text">
        <h4>Forth news title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

<div class="nieuws__block">
  <div class="nieuws__block-left">
    <div class="grid__container grid__col--10 grid__push--1 flex__vertical-align">
      <div class="nieuws__block-text">
        <h4>Fifth news title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <div class="nieuws__block-right">
    <img class="path" src="<?php echo $view->getThemePath(); ?>/assets/images/nieuws3.jpg">
  </div>
</div>


</section>

<?php Loader::packageElement('footer', 'flexim'); ?>
