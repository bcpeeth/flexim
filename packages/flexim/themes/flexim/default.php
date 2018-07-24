<?php Loader::packageElement('header', 'flexim'); ?>

<section class="hero">
  <img class="path" src="<?php echo $view->getThemePath(); ?>/assets/images/hero.jpg">
</section>

<section class="intro padding--top-3-steps padding--bottom-3-steps">
  <div class="grid__container">

    <div class="grid__col--6">

    <?php 
      $a = new Area('Oprichting');
      $a->display();
    ?>

      <!-- <h3 class="padding--bottom-step">Oprichting</h3>
      <p>De Flexim Foundation is opgericht op … in Dordrecht op initiatief van een aantal medewerkers van Flexim Netherlands.
      <br />
      <br />
      De Flexim Foundation zet zich in voor diverse kwetsbare groepen binnen en buiten de Nederlandse samenleving. Deze kwetsbare groepen worden geholpen om hun levenscondities te verbeteren en toekomstperspectief te vergroten. 
      </p> -->
    </div>

    <div class="grid__col--4 grid__push--2">
      <!-- <?php 
        $a = new Area('Oprichting Image');
        $a->display();
      ?> -->
      <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/Tekengebied-1.png">
    </div>

  </div>
</section>

<!-- <section class="goal">
  <div class="grid__container padding--top-3-steps padding--bottom-3-steps">
    <div class="grid__col--6 bg-red  white">
      <h3 class="padding--bottom-step">Doelstelling</h3>
      <p>“De Flexim Foundation stelt zich ten doel de levenscondities en toekomstmogelijkheden van kwetsbare groepen (in de Nederlandse samenleving en daarbuiten) te verbeteren. De Flexim Foundation tracht dit doel te bereiken door financiële ondersteuning van en actieve bijdrage aan de uitvoering van projecten conform het gestelde doel.”</p>
    </div>
  </div>
</section>

<section class="method">
  <div class="grid__container padding--top-2-steps padding--bottom-2-steps">

    <div class="grid__col--6 grid__push--1 grid__collapse">
      <h3 class="padding--bottom-step">Dit wordt bereikt door</h3>
      <div class="list-horizontal">
        <ul>
          <li>financiële middelen te werven via sponsoring en giften</li>
          <li>continuïteit te waarborgen vanuit Flexim Netherlands</li>
          <li>werkgevers te motiveren om tijd/arbeid en kennis beschikbaar te stellen door vrijwilligerswerk van hun werknemers</li>
          <li>particulieren alsmede instanties in te zetten voor het verwerven van de middelen alsmede beschikbaar stellen van arbeid</li>
          <li>medewerkers en klanten van Flexim aan te sporen zich in te zetten bij de activiteiten van de foundation</li>
        
        </ul>
      </div>
    </div>
   
  </div>
</section> -->

<section class="goal bg-red white clearfix">
  <div class="grid__container padding--top-3-steps padding--bottom-3-steps text--align-center">
    
    <div class="grid__col--8 grid__push--2">

    <?php 
      $a = new Area('Doelstelling');
      $a->display();
    ?>
      <!-- <h3 class="padding--bottom-step">Doelstelling</h3>
      <p>“De Flexim Foundation stelt zich ten doel de levenscondities en toekomstmogelijkheden van kwetsbare groepen (in de Nederlandse samenleving en daarbuiten) te verbeteren. De Flexim Foundation tracht dit doel te bereiken door financiële ondersteuning van en actieve bijdrage aan de uitvoering van projecten conform het gestelde doel.”</p> -->
    </div>
  </div>
</section>

<section class="method">
  <div class="grid__container padding--top-3-steps padding--bottom-3-steps">


    <div class="image grid__col--3 grid__push--2">
      <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/twirl_team.png">
    </div>

    <div class="grid__col--6 grid__push--1 grid__collapse">

    <?php 
      $a = new Area('Bereikt Door');
      $a->display();
    ?>
      <!-- <h3 class="padding--bottom-step">Dit wordt bereikt door</h3>
      <div class="list-horizontal">
        <ul>
          <li>financiële middelen te werven via sponsoring en giften</li>
          <li>continuïteit te waarborgen vanuit Flexim Netherlands</li>
          <li>werkgevers te motiveren om tijd/arbeid en kennis beschikbaar te stellen door vrijwilligerswerk van hun werknemers</li>
          <li>particulieren alsmede instanties in te zetten voor het verwerven van de middelen alsmede beschikbaar stellen van arbeid</li>
          <li>medewerkers en klanten van Flexim aan te sporen zich in te zetten bij de activiteiten van de foundation</li>
        
        </ul>
      </div> -->
    </div>
   
  </div>
</section>

<section class="target bg-lightgrey">
  <div class="grid__container padding--top-3-steps padding--bottom-3-steps">
    <div class="grid__col--6">
    <?php 
      $a = new Area('Doelgroep');
      $a->display();
    ?>
    <!-- <h3 class="padding--bottom-step">Doelgroep</h3>
      <p>De doelgroep van de Flexim Foundation is een groep mensen in de samenleving die niet zelfredzaam is, eenzaam is, een lichamelijke of psychische handicap heeft of op of onder de armoedegrens leeft.</p> -->
    </div>
    <div class="grid__col--4 grid__push--2">
      <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/au2.png">
    </div>

  </div>
</section>

<section class="team">


  <div class="grid__container padding--top-2-steps">
    <div class="grid__col--8 grid__push--2 padding--bottom-2-steps">
      <?php 
        $a = new Area('Bestuur');
        $a->display();
      ?>
      <!-- <h3 class="padding--bottom-step text--align-center">Bestuur</h3>
      <p>Het Dagelijks Bestuur van de stichting wordt gevormd door dhr. Q.A.J.M. Tak, voorzitter, dhr. R.G. Bruins, secretaris en mw P. Veldhuizen, penningmeester.
      </p> -->
    </div>
  </div>


  <div class="grid__container">
    <div class="grid__col--12 padding--bottom-3-steps">


      <div class="photos text--align-center">
      
        <div class="col-5">
          <img class="padding--bottom-step" src="<?php echo $view->getThemePath(); ?>/assets/images/Tekengebied-grey.png">
          <h5>Rini Tak</h5>
       
          <p><em>Voorzitter</em></p>
          <br />
          Vanuit zijn passie al jarenlang betrokken bij diverse stichtingen.
          <br />
          
        </div>
        <div class="col-5">
          <img class="padding--bottom-step" src="<?php echo $view->getThemePath(); ?>/assets/images/Tekengebied-grey.png">
          <h5>Patty van Veldhuizen</h5>

          <p><em>Penningmeester</em></p>
          <br />
          Als fiscalist altijd de focus op financieel beheer.
          <br />    
        </div>
        <div class="col-5">
          <img class="padding--bottom-step" src="<?php echo $view->getThemePath(); ?>/assets/images/Tekengebied-grey.png">
          <h5>Richard Bruins</h5>

          <p><em>Secretaris</em></p>
          <br />
          Als Directeur Flexim Netherlands de initiatiefnemer en direct betrokken bij diverse goede doelen.
          <br />
          
        </div>
        <div class="col-5">
          <img class="padding--bottom-step" src="<?php echo $view->getThemePath(); ?>/assets/images/Tekengebied-grey.png">
          <h5>Célie Verstelle</h5>

          <p><em>Algemeen Bestuurslid</em></p>
          <br />
          Als Legal advisor en haar juridische achtergrond gedreven de juiste support te geven.
          <br />

        </div>
        <div class="col-5">
          <img class="padding--bottom-step" src="<?php echo $view->getThemePath(); ?>/assets/images/Tekengebied-grey.png">
          <h5>Remko Overdam</h5>

          <p><em>Algemeen Bestuurslid</em></p>
          <br />
          Als Directeur bij een ontwikkelaar als visionair betrokken bij diverse (maatschappelijke) ontwikkelingen.
          <br />




        </div>

      </div>


    </div>
  </div>


</section>

<?php Loader::packageElement('footer', 'flexim'); ?>
