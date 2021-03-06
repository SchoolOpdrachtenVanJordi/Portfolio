<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projects</title>

    <!-- Fonts / styles -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
</head>

<body>
    <div>

        <!-- header -->

        @include('extensions.header')

        <!-- end header -->


        <div class="main_container">

            <div class="main-text">
                <h3 class="centered">Hier kan je al mijn projecten zien!!</h3>
                <h5 class="centered">Alle projecten heb ik zelfstandig gemaakt.</h5>
            </div>

<!-- project code  -->
            <hr class="black ">
            <div class="projects centered">
                <h4>Project 1: De live chat</h4>
                <p>Link: <a class="href-projects" href="https://glulivechat.herokuapp.com/">LiveChat</a> </p>
                <p>Deze opdracht was een project van school. We moesten een livechat systeem maken. De livechat heb ik wel in mijn eentje gemaakt.</p>
                <p>Eerst moet je je naam invullen.</p>
                <img class="photo-project" src="{{ URL::to('/img/1.png') }}"> <br>
                <p>Daarna kan je chatten. Als je op de link klikt kan je zelf ook chatten. </p>
                <img class="photo-project-long" src="{{ URL::to('/img/2.png') }}">
                <h5>Code</h5>
                <p>Dit is een stukje code dat zorgt voor verbinding met een server.  </p>
                <img class="photo-project-long" src="{{ URL::to('/img/3.png') }}">
                <p>Dit is een stukje code uit het chat systeem.  </p>
                <img class="photo-project" src="{{ URL::to('/img/4.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 2: De dieren webshop</h4>
                <p>Link: <a class="href-projects" href="http://u532639.gluweb.nl/">DierenWebshop</a> </p>
                <p>Deze opdracht was een project van school. Je moest als eindopdracht in leerjaar 1 periode 2 een webshop maken. Toen heb ik een dieren webshop gemaakt. Ik heb dit solo gemaakt.</p>
                <p>Hier zie je de dieren die je kan kopen.</p>
                <img class="photo-project-long" src="{{ URL::to('/img/5.png') }}"> <br>
                <p>Hier kan je kiezen tussen 3 verschillende olifanten. Als je daarna op de olifant klikt die je wilt, ga je verder naar betalen.</p>
                <img class="photo-project-long" src="{{ URL::to('/img/6.png') }}">
                <h5>Code</h5>
                <p>Dit is een stukje code dat de 3 dieren naast elkaar zet.  </p>
                <img class="photo-project-long" src="{{ URL::to('/img/7.png') }}">
                <p>Dit is een stukje code dat laat zien dat de sidebar open en dicht gaat.</p>
                <img class="photo-project" src="{{ URL::to('/img/8.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 3: De corona webshop</h4>
                <!-- <p>Link: <a class="href-projects" href="https://glulivechat.herokuapp.com/">LiveChat</a> </p> -->
                <p>Deze opdracht was een project van school. We moesten in periode 3 een webshop maken. Corona was net begonnen dus ik had een webshop voor corona spullen gemaakt. Ik heb dit solo gemaakt.</p>
                <p>Hier zie je een paar producten.</p>
                <img class="photo-project" src="{{ URL::to('/img/9.png') }}"> <br>
                <p>Dit was mijn eerste zelfgemaakte inlog systeem. Ik was er toen zeer trots op. </p>
                <img class="photo-project" src="{{ URL::to('/img/10.png') }}">
                <h5>Code</h5>
                <p>Dit is een stukje code dat de producten uit de database haalt en laat zien op de pagina.  </p>
                <img class="photo-project-medium" src="{{ URL::to('/img/11.png') }}">
                <p>Dit is een stukje code in het inlogsysteem.  </p>
                <img class="photo-project-medium" src="{{ URL::to('/img/12.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 4: De bal</h4>
                <!-- <p>Link: <a class="href-projects" href="https://glulivechat.herokuapp.com/">LiveChat</a> </p> -->
                <p>Deze opdracht was een project van school. Bij deze opdracht moesten we een  vierkant maken, die de hele tijd heen en weer ging. Ik heb dit solo gemaakt.</p>
                <p>Zo ziet de game eruit.</p>
                <img class="photo-project" src="{{ URL::to('/img/13.png') }}"> <br>
                <h5>Code</h5>
                <p>Dit zorgt ervoor dat het vierkantje beweegt.</p>
                <img class="photo-project-long" src="{{ URL::to('/img/15.png') }}">
                <p></p>
                <img class="photo-project-long" src="{{ URL::to('/img/14.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 5: De corona tracker</h4>
                <p>Link: <a class="href-projects" href="#">Nog niet online😒</a> </p>
                <p>Dit is een eigen project. Gemaakt met React, deze app gebruikt een API en dan komt alle informatie overal te staan. (Dit project is nog niet af). Ik heb dit solo gemaakt.</p>
                <p>Hier zie je de informatie staan, dat komt uit de API.</p>
                <img class="photo-project" src="{{ URL::to('/img/16.png') }}"> <br>
                <h5>Code</h5>
                <p>Dit stukje code haalt de informatie uit de API. </p>
                <img class="photo-project-medium" src="{{ URL::to('/img/17.png') }}">
                <p>Dit is een stukje code die laat alle informatie zien en zorgt voor styling. </p>
                <img class="photo-project-medium" src="{{ URL::to('/img/18.png') }}">
            </div>
            <hr class="black ">
            <div class="projects centered">
                <h4>Project 6: De auto game</h4>
                <p>Deze opdracht was een project van school. Deze opdracht is uit periode 2 jaar 1. We moesten een auto game maken. Dit is het eindresultaat. Ik heb dit solo gemaakt.</p>
                <p>Hier zie je de game</p>
                <img class="photo-project-long" src="{{ URL::to('/img/19.png') }}"> <br>
                <p>Als je tegen een boom aan rijdt dan wordt de afbeelding veranderd naar een auto die kapot is.   </p>
                <img class="photo-project" src="{{ URL::to('/img/21.png') }}">
                <p>Deze code zorgt ervoor dat de auto beweegt als jij de pijltjes toetsen indrukt.  </p>
                <img class="photo-project" src="{{ URL::to('/img/20.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 7: De moter game</h4>
                <p>Link: <a class="href-projects" href="http://u532639.gluweb.nl/js_hang_on_game/">Moter Game</a> </p>
                <p>Deze opdracht was een project van school. Bij deze opdracht gingen we een moter game maken. Ik heb dit solo gemaakt.</p>
                <p>Hier zie je de game.</p>
                <img class="photo-project" src="{{ URL::to('/img/22.png') }}"> <br>
                <h5>Code</h5>
                <p>Deze code zorgt ervoor dat de moter kan rijden en sturen. De lap counter zit erbij.  </p>
                <img class="photo-project" src="{{ URL::to('/img/23.png') }}">
                <p>Dit is een stukje code die het canvas laat zien. (het beeld).  </p>
                <img class="photo-project" src="{{ URL::to('/img/24.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 8: Piano</h4>
                <p>Deze opdracht was een project van school. Dit was één van de eerste opdrachten van jaar 1. We moesten een piano maken. Toen snapte ik er niks van, maar als ik nu terug kijk dan denk ik wat heb ik toch veel geleerd de afgelopen anderhalf jaar. Ik heb dit solo gemaakt.</p>
                <p>Hier is de mooi gestylde piano😂.</p>
                <img class="photo-project" src="{{ URL::to('/img/25.png') }}"> <br>
                <h5>Code</h5>
                <p>Deze code zorgt dat het ID een geluid geeft.  </p>
                <img class="photo-project" src="{{ URL::to('/img/26.png') }}">
                <p>En dit zorgt ervoor dat het wordt uitgevoerd. Als je op een button klikt.  </p>
                <img class="photo-project" src="{{ URL::to('/img/27.png') }}">
            </div>

            <hr class="black ">
            <div class="projects centered">
                <h4>Project 9: De Coolblue website</h4>
                <p>Deze opdracht was een project van school. Hier moesten we de coolblue website namaken, toen was ik er zeer trots op. Omdat hij veel werk was. Ik heb dit solo gemaakt.</p>
                <p>Hier zie je het bestel formulier.</p>
                <img class="photo-project" src="{{ URL::to('/img/28.png') }}"> <br>
                <h5>Code</h5>
                <p></p>
                <img class="photo-project-long" src="{{ URL::to('/img/29.png') }}">
                
            </div>

            <br>
<!-- project code  -->


        </div>





        <!-- footer -->

        @include('extensions.footer')

        <!-- end footer -->
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>