<?php Loader::packageElement('header', 'flexim'); ?>

  <?php 
    $a = new Area('Projecten');
    $a->display();
  ?>
  

<div class="projecten padding--top-3-steps padding--bottom-3-steps">
  <div class="grid__container">
    <div class="grid__col--3 grid__col--md-6">  
        <div class="about__block"> 
            <div class="icon__circle">                             
                <i class="material-icons">touch_app</i>
            </div>
            <br/>
            <h6>Stap 1</h6>
            </br>
            <p>Stuur met &eacute;&eacute;n druk op de knop een vragenlijst naar al uw vaste en flexibele personeel.</p>                                
        </div>
    </div>

    <div class="grid__col--3 grid__col--md-6">  
        <div class="about__block">  
            <div class="icon__circle">                            
                <i class="material-icons">people</i>
            </div>
            <br/>
            <h6>Stap 2</h6>
            </br>
            <p> Medewerkers kunnen de vragenlijst anoniem beantwoorden.</p>                                
        </div>
    </div>

    <div class="grid__col--3 grid__col--md-6">  
        <div class="about__block">    
            <div class="icon__circle">                          
                <i class="material-icons">dashboard</i>
            </div>

            <br/>
            <h6>Stap 3</h6>
            </br>
            <p>Bekijk direct de cijfers, conclusies en aanbevelingen in een overzichtelijk dashboard.</p>                                
        </div>
    </div>

    <div class="grid__col--3 grid__col--md-6">  
        <div class="about__block">                              
            <div class="icon__circle">
                <i class="material-icons">trending_up</i>
            </div>
            <br/>
            <h6>Stap 4</h6>
            </br>
            <p>Feedback implementeren in de organisatie.</p>                                
        </div>
    </div>
  </div>
</div>

<?php Loader::packageElement('footer', 'flexim'); ?>
