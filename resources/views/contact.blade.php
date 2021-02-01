<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

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
        @include('contact.email')
        </div>

         <!-- Main Footer -->
      <section class="background-dark centered full-width">
        <!-- Map -->
        <div class="">
          <div class="s-6 centered foto center">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39281.55537442737!2d5.516442895707673!3d52.02332672471991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6522a2a3ad32b%3A0x3fe2f0d7aea3937f!2sVeenendaal!5e0!3m2!1snl!2snl!4v1612194089322!5m2!1snl!2snl" width="100%" height="450" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Adress</h3>
                  <p>Bosweg 123<br>
                  1234 AA Houtstad
                     
                  </p>               
                </div>
                <div class="float-left">
                  
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>jordiromijn@gmail.com<br>
                     u532639@student.glu.nl
                  </p>              
                </div>
                <div class="float-left">

                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Telefoon nummer</h3>
                  <p>06 22966685<br>
                    
                     
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
        <!-- footer -->

        @include('extensions.footer')

        <!-- end footer -->
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>

