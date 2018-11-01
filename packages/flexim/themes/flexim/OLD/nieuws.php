<?php Loader::packageElement('header', 'flexim'); ?>

<section class="nieuws">


    <!-- <?php 
        $a = new Area('Nieuws Intro');
        $a->display();
    ?> -->

    
    <div class="nieuws-intro bg-blue text--align-center white">
        <div class="grid__container padding--top-3-steps padding--bottom-3-steps">
            <div class="grid__col--8 grid__push--2">
                <h4 class=" text--align-center padding--bottom-nano">Flexim Foundation is continu in ontwikkeling.</h4>
                <p>Daarbij zijn de medewerkers, klanten en relaties van Flexim intensief betrokken om samen een bijdrage te leveren aan aan diverse maatschappelijke doelen in binnen en buitenland. Volg hieronder onze laatste ontwikkelingen: </p>
            </div>
        </div>
    </div>


    <!-- <?php 
        $a = new Area('Nieuws');
        $a->display();
    ?> -->

    <div class="nieuws-block">
        <div class="grid__container  grid__visual padding--top-3-steps padding--bottom-3-steps ">

            <div class="grid__col--6 grid__col--sm-12">
                <div class="nieuws-block__text nieuws-block__text--left">
                    <h3 class="padding--bottom-step">Tour de Flexim brengt € 12.122,- op!</h3>
                    <p>Wat een geweldige prestatie! Na een tocht van 955 kilometer kwamen zaterdag 1 september om 16.00 uur de fietsers en het support team aan in Hoek van Holland. Hiermee hebben zij €12.122,- ingezameld voor twee projecten. 
                    <br />
                    <br />
                    Wij willen iedereen bedanken die een bijdrage heeft geleverd aan dit evenement en in het bijzonder alle donateurs!
                    </p>
                </div>
            </div>

            <div class="grid__col--6 grid__col--sm-12">
                <div class="nieuws-block__image nieuws-block__image--right">
                    <img class="" src="<?php echo $view->getThemePath(); ?>/assets/images/tourdeflexim.jpg">
                </div>
            </div>

        </div>
    </div>
  

</section>

<?php Loader::packageElement('footer', 'flexim'); ?>
