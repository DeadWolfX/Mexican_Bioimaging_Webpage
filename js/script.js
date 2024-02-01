$(document).ready(function() {
  $('.slider').slick({
    slidesToShow: 1, // Cambia el número de imágenes mostradas a la vez
    slidesToScroll: 1, // Cambia el número de imágenes a desplazar
    autoplay: true, // Activa la reproducción automática
    autoplaySpeed: 2000, // Cambia la velocidad de reproducción automática (en milisegundos)
    arrows: false, // Muestra las flechas de navegación
    dots: false // Muestra los puntos de navegación
  });
  

  function scrollTo(section) {
   if (section == 'mision'){ 
      $('html, body').animate({
       scrollTop: $('#' + section).offset().top
      }, 1000);
    }  
  }

  $(".submenu .espanol:contains('Nuestra Misión')").click(function() {
    scrollTo('mision');
  });
  $(".submenu .ingles:contains('Our Mission')").click(function() {
    scrollTo('mision');
  });

  $(".submenu .espanol:contains('Consejo Ejecutivo')").click(function() {
    scrollTo('personas');
  });
  $(".submenu .ingles:contains('Executive Board')").click(function() {
    scrollTo('personas');
  });

});




function cambiarIdioma(idioma) {
      var elementosEsp = document.getElementsByClassName("espanol");
      var elementosIng = document.getElementsByClassName("ingles");

      if (idioma === "es") {
        for (var i = 0; i < elementosEsp.length; i++) {
          elementosEsp[i].style.display = "inline";
        }
        for (var i = 0; i < elementosIng.length; i++) {
          elementosIng[i].style.display = "none";
        }
      } else if (idioma === "en") {
        for (var i = 0; i < elementosEsp.length; i++) {
          elementosEsp[i].style.display = "none";
        }
        for (var i = 0; i < elementosIng.length; i++) {
          elementosIng[i].style.display = "inline";
        }
      }
    }
