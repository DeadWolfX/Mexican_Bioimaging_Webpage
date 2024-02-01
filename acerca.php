<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="es">
  <title>Mexico BioImaging</title> 
  <link rel="icon" type="image/png" href="im/logo.png">
  <link rel="stylesheet" type="text/css" href="css/estilos.css" >
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  
  <style>
    body {
      background-image: url('im/fondo1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
 </style>
  
</head>

<body>
  
  <header>
    <h1 class="espanol">Acerca de Mexico BioImaging</h1>
    <h1 class="ingles" style="display: none ">About Mexico BioImaging</h1>
    <nav>
      <ul>
        <li>
          <a href="bim.php" class="espanol">Inicio</a>
          <a href="bim.php" class="ingles" style="display: none">Home</a>
        </li>
        <li>
          <a href="acerca.php" class="espanol">Acerca de</a>
          <a href="acerca.php" class="ingles" style="display: none">About</a>
           <ul class="submenu">
            <li><a href="" class="espanol">Nuestra Misión</a></li>
            <li><a href="" class="ingles" style="display: none">Our Mission</a></li>
            <li><a href="" class="espanol">Consejo Ejecutivo</a></li>
            <li><a href="" class="ingles" style="display: none">Executive Board</a></li>
            <li><a href="#" class="espanol">Opción3</a></li>
            <li><a href="#" class="ingles" style="display: none">Option3</a></li>
          </ul>
        </li>
        <li>
          <a href="" class="espanol">Menu 2</a>
          <a href="" class="ingles" style="display: none"> Menu 2</a>
          <ul class="submenu">
            <li><a href="#" class="espanol">Opción1</a></li>
            <li><a href="#" class="ingles" style="display: none">Option1</a></li>
            <li><a href="#" class="espanol">Opción2</a></li>
            <li><a href="#" class="ingles" style="display: none">Option2</a></li>
            <li><a href="#" class="espanol">Opción3</a></li>
            <li><a href="#" class="ingles" style="display: none">Option3</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  
  <main>

    <div id="mision">
      <a class="espanol"><h2><b>Misión</b></h2></a>
      <a class="ingles" style="display: none"><h2><b>Mission</b></h2></a>

      <a class="espanol"><h4>Nuestra misión en la vida es...</h4></a>
      <a class="ingles" style="display: none"><h4>Our mission in the life is...</h4></a>

      <a class="espanol"><h3><b>Visión</b></h3></a>
      <a class="ingles" style="display: none"><h3><b>Vision</b></h3></a>

      <a class="espanol"><h4>Nuestra visión en la vida es...</h4></a>
      <a class="ingles" style="display: none"><h4>Our vision in the life is...</h4></a>

    </div>

    <div id="personas">
      <center>
        
        <div class="news-header">
          <h3 class="espanol">Consejo Ejecutivo  <img src="im/icono2.png" alt="Icono de Noticias" class="people-icon" ></h3>
          <h3 class="ingles" style="display: none">Executive Board <img src="im/icono2.png" alt="Icono de Noticias" class="people-icon"></h3>
        </div>
        <iframe class="airtable-embed" src="https://airtable.com/embed/shr28DGkryPtzlcPo?backgroundColor=grayDusty&viewControls=on" frameborder="0" onmousewheel="" width="80%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
      </center>
    </div>
  

     <div id="map"></div>
   
      <script>
        function initMap() {
          const map = new google.maps.Map(document.getElementById('map'), {
            zoom:5,
            center: { lat:20.250109976655125, lng:-99.3257735732414 } // Coordenadas iniciales del mapa
          }); 
          
          // Aquí deberás agregar código para obtener las direcciones desde Airtable y mostrar los marcadores en el mapa.
          const marker = new google.maps.Marker({
            position: { lat: 18.984569165978392, lng: -99.23430786931472 }, // Coordenadas de la dirección obtenidas desde Airtable
            map: map,
            title: 'LNMA'// Título del marcador (opcional)
           });
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT6TrjYJF-6YkNO404VheGmEmJ3w3U0LI&callback=initMap" async defer></script> 
   
      
  </main>
  
  
  <div class="idioma-buttons">
   <button onclick="cambiarIdioma('es')">Esp
   <img src="im/esp.png" alt="Español" width="30" height="15"></button>
   <button onclick="cambiarIdioma('en')">Eng
   <img src="im/usa.png" alt="Español" width="30" height="15"></button></button>
  </div> 

   
</body>
</html>

