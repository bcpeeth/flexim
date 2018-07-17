<?php Loader::packageElement('header', 'veganific'); ?>

<section class="top-wrapper position--relative">
  <div class="bg-orange position--absolute">
  </div>
  <div class="grid__container position--relative padding--top-3-steps">
    <div class="content">
      <div class="grid__col--5 grid__push--1">
        <p class="padding--bottom-3-steps">Veganific</p>
        <h2 class="white padding--bottom-nano">Find the <span class="underline">vegan girl</span> of your dreams</h2>
        <p>Get your account for free for a limited time</p>
        <div class="buttons padding--top-step">
          <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/apple.svg">
          <img class="goggle" src="<?php echo $view->getThemePath(); ?>/assets/images/google.png">
        </div>
      </div>
      <div class="grid__col--6">
        <div class="phone-frame">
          <img class=""
               src="<?php echo $view->getThemePath(); ?>/assets/images/phone.png"
               srcset="<?php echo $view->getThemePath(); ?>/assets/images/phone.png 1x, <?php echo $view->getThemePath(); ?>/assets/images/phone@2x.png 2x">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="middle-text">
  <div class="grid__container padding--bottom-2-steps">
    <div class="grid__col--5 grid__push--1">
      <h3 class="darkblue padding--bottom-nano">Strong community with people who share your passion</h3>
      <p class="darkblue">Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you.</p>
    </div>
  </div>
</section>

<section class="middle-wrapper position--relative padding--top-step">
  <div class="bg-lightgrey position--absolute">
  </div>
  <div class="grid__container position--relative ">
    <div class="content">

      <div class="grid__col--4 grid__push--1">
        <div class="phone-frame">
          <img class=""
                src="<?php echo $view->getThemePath(); ?>/assets/images/facebook-login.png"
                srcset="<?php echo $view->getThemePath(); ?>/assets/images/facebook-login.png 1x, <?php echo $view->getThemePath(); ?>/assets/images/facebook-login@2x.png 2x">
        </div>
      </div>
      <div class="grid__col--5 grid__push--1">
        <h3 class="darkblue padding--bottom-nano">Become a part of our community and find your true love</h3>
        <p class="darkblue">Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you.</p>
        <div class="buttons padding--top-step">
          <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/apple.svg">
          <img class="goggle" src="<?php echo $view->getThemePath(); ?>/assets/images/google.png">
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bottom-wrapper">
  <div class="grid__container padding--top-4-steps">


    <div class="grid__col--6 grid__push--3 text--align-center padding--bottom-nano">
      <h3 class="darkblue">50% of people on veganific found their perfect love</h3>
    </div>
    
    <!-- <div class="grid__col--6 grid__push--3 text--align-center">
      <p class="darkblue">Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you.</p>
    </div> -->


    <div class="grid__col--6 grid__push--3 padding--bottom-3-steps">
      
      <div class="slider">

        <input type="radio" name="slider" title="" checked="checked" class="slider__nav">
        <input type="radio" name="slider" title="" class="slider__nav"/>
        <input type="radio" name="slider" title="" class="slider__nav"/>
        <input type="radio" name="slider" title="" class="slider__nav"/>


        <div class="slider__inner">
          <div class="slider__contents">
            <p class="slider__txt">"Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you."</p>
          </div>
          <div class="slider__contents">
            <p class="slider__txt">"Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you."</p>
          </div>
          <div class="slider__contents">
            <p class="slider__txt">"Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you."</p>
          </div>
          <div class="slider__contents">

            <p class="slider__txt">"Only vegans allowed. People who are vegan are likely to live a more thoughtful live, just like you."</p>
          </div>
        </div>
      </div>

      <div class="grid__col--6 grid__push--3">
        <div class="slider-buttons">
          <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/1st.png">
          <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/2nd.png">
          <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/3rd.png">
        </div>
      </div>
    </div>


    
  </div>
</section>


<?php Loader::packageElement('footer', 'veganific'); ?>
