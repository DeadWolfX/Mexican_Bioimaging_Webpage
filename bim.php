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
      background-image: url('im/fondo.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
 </style>
  
</head>
<body>
  <header>
    <a href="bim.php"><img src="im/logo.png" alt="Logo" width="150" height="100"></a>
    <h1 class="espanol"> Mexico BioImaging</h1>
    <h1 class="ingles" style="display: none "> Mexico BioImaging</h1>
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
            <li><a href="acerca.php" class="espanol">Nuestra Misión</a></li>
            <li><a href="acerca.php" class="ingles" style="display: none">Our Mission</a></li>
            <li><a href="acerca.php" class="espanol">Consejo Ejecutivo</a></li>
            <li><a href="acerca.php" class="ingles" style="display: none">Executive Board</a></li>
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
    <div class="slider-container">
      <div class="slider-overlay"></div>
      <div class="slider">
        <img src="im/1.png" alt="Imagen 1">
        <img src="im/2.png" alt="Imagen 2">
        <img src="im/3.png" alt="Imagen 3">
        <img src="im/4.png" alt="Imagen 4">
        <!-- Añade más imágenes según sea necesario -->
      </div>
      <div class="slider-text">
        <h2 class="espanol">Nosotros somos Mexico BioImaging...</h2>
        <h2 class="ingles" style="display: none;">We are Mexico BioImaging...</h2>
      </div>
    </div>

    <div class="news-header">
      <h3 class="espanol">Noticias  <img src="im/icono1.png" alt="Icono de Noticias" class="news-icon" ></h3>
      <h3 class="ingles" style="display: none">News  <img src="im/icono1.png" alt="Icono de Noticias" class="news-icon"></h3>
      
    </div>
    
    <center>
    <iframe class="airtable-embed" src="https://airtable.com/embed/shr8MhRuhDyRiAeKi?backgroundColor=gray&viewControls=on" frameborder="0" onmousewheel="" width="80%" height="550" style="background: transparent; border: 1px solid #ccc;"></iframe>
    </center>
    
  
    

  </main>
  
  
  <div class="idioma-buttons">
   <button onclick="cambiarIdioma('es')">Esp
   <img src="im/esp.png" alt="Español" width="30" height="15"></button>
   <button onclick="cambiarIdioma('en')">Eng
   <img src="im/usa.png" alt="Español" width="30" height="15"></button></button>
  </div> 

   
</body>
</html>

