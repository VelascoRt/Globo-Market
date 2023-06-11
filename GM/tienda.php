<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="src/img//logo-globomarket-fondo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src\css\tiendaStyle.css">
    <link rel="stylesheet" href="src\css\style.css">

    <title>GloboMarket</title>

    <script> //JavaScript
        document.addEventListener('DOMContentLoaded', function () {
            var hamburger = document.querySelector('#header .hamburger');
            var navList = document.querySelector('#header .nav-list ul');

            hamburger.addEventListener('click', function () {
                hamburger.classList.toggle('active');
                navList.classList.toggle('active');
            });
        });
    </script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
  <section id="header">
    <div class="header container-fluid">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero" class="brand">
            <img src="src/img//logo-globomarket-fondo.png" alt="Logo de Globo Market">
          </a>
        </div>
        <div class="nav-list">
          
          <ul>
            <li><a href="http://servidor211.com/212/globo_market/index.php" data-after="Inicio">Inicio</a></li>
            <li><a href="http://servidor211.com/212/globo_market/index.php#services" data-after="Servicios">Servicios</a>
            <li><a href="http://servidor211.com/212/globo_market/index.php#projects" data-after="Galería">Galería</a></li>
            <li><a href="http://servidor211.com/212/globo_market/index.php#about" data-after="Nosotros">Nosotros</a></li>
            <li><a href="http://servidor211.com/212/globo_market/tienda.html" data-after="Productos">Productos</a></li>
            <li><a href="http://servidor211.com/212/globo_market/index.php#contact" data-after="Contacto">Contacto</a></li>
          </ul>
        </div>
        <div class="hamburger">
          <div class="bar"></div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <?php
  include(productos.php); 
  ?>

  <!-- Tienda -->
  
  

  <!-- Fin Tienda -->

  <!-- Footer -->

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111E90ff" fill-opacity="1"
            d="M0,160L48,144C96,128,192,96,288,117.3C384,139,480,213,576,240C672,267,768,245,864,234.7C960,224,1056,224,1152,192C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><span>G</span>lobo<span>M</span>arket&reg;</h1>
            </div>
            <h2>Siguenos en nuestras redes sociales</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="https://www.facebook.com/globomarket.mx" target="_blank"><img
                            src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://www.instagram.com/globomarket/" target="_blank"><img
                            src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://twitter.com/globomarket?lang=es" target="_blank"><img
                            src="http://servidor211.com/212/globo_market/src/img//iconTwitter.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://www.youtube.com/@GloboMarket/videos" target="_blank"><img
                            src="https://img.icons8.com/?size=512&id=110572&format=png" /></a>
                </div>
            </div>
            <p>Copyright © 2023 GloboMarket&reg;. Todos los derechos reservados</p>
        </div>
    </section>
    <!-- End Footer -->
    

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="src\js\script.js"></script>
</body>
</html>