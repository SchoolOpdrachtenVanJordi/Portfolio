<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts / styles -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
</head>

<body>

<link href="contact-form.css" rel="stylesheet">

<div class="fcf-body">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #26272b;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.red {
  background-color: red;
}

.white {
  background-color: #FFFAFA;
}

.blue {
  background-color: blue;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Wie ben ik</h1>
  <p>Ik ben Jordi Romijn, ik ben 18 jaar oud.</p>
  <p>Ik ben student op het Grafisch Lyceum Utrecht. Ik doe de opleiding webdeveloper, een webdeloper bouwt websites. Hij zorgt dat de website er goed uit ziet zowel de voorkant als achterkant van de website.  
  </p>

</div>

<h2 style="text-align:center">Mijn eigenschappen / toekomst</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Waarom deze opleiding</h2>
        <p class="title"></p>
        <p>Ik doe deze opleiding omdat het me altijd al leuk leek om websites te maken en ik altijd zoek naar nieuwe dingen om te leren. </p>
        <p>Open a PDF file <a href="https://www.monsterboard.nl/resumes/Resume/Settings/aw7vktz58abcdnhr">example</a>.</p>
        <p><button class="button red"></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Wat wil ik nog leren</h2>
        
        <p>Ik wil graag meer talen leren, zoals Python, Java en C##. Dat soort talen geven ze helaas niet op mijn opleiding maar als ik HBO ga doen, wil ik dat gaan leren.</p>
        <p class="title"></p>
        <p><button class="button white"></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Hard en Soft skills</h2>
        <p class="title"></p>
        <p>Hard skills: De programmeer talen die ik nu kan zijn JavaScript, PHP en React</p>
        <p>Soft skills: Mijn softskills zijn dat ik hard kan werken, enthousiast ben en in hectische situaties rustig blijf. En wat ook belangrijk is, is dat ik goed in een team kan werken met verschillende mensen.</p>
        <p><button class="button blue"></button></p>
      </div>
    </div>
  </div>
</div>

</div>

</body>
</html>

