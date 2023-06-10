<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Globo Market</title>


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <li><a href="#hero" data-after="Inicio">Inicio</a></li>
                        <li><a href="#services" data-after="Servicios">Servicios</a>
                            <ul class="submenu">
                                <li><a href="src/php/index.php">Catálogo</a></li>
                                <li><a href="tienda.html">Productos</a></li>
                            </ul>
                        </li>
                        <li><a href="#projects" data-after="Galería">Galería</a></li>
                        <li><a href="#about" data-after="Nosotros">Nosotros</a></li>
                        <li><a href="#contact" data-after="Contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="hamburger">
                    <div class="bar"></div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->


    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Bienvenidos a <span></span></h1>
                <h1>GloboMarket&reg;<span></span></h1>
                <a href="#services" type="button" class="cta">Inflando sonrisas en cada fiesta</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Service Section -->
    <section id="services">
        <div class="services container-fluid">
            <div class="service-top">
                <h1 class="section-title">S<span>e</span>rv<span>i</span>ci<span>o</span>s</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda
                    quas
                    magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque
                    molestias
                    voluptatum explicabo!</p>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon"><img src="src/img//globoNormales.jpg" /></div>
                    <h2>Globos Normales</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem
                        sed
                        architecto placeat beatae tenetur officia quod</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="src/img//globoMario.jpg" /></div>
                    <h2>Globos Personalizados</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem
                        sed
                        architecto placeat beatae tenetur officia quod</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
                    <h2>Liquidación</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem
                        sed
                        architecto placeat beatae tenetur officia quod</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="src/img//fondo.png" /></div>
                    <h2>Servicio de arreglo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem
                        sed
                        architecto placeat beatae tenetur officia quod</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Projects Section -->
    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title">G<span>a</span>l<span>e</span>r<span>í</span>a</h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 1</h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum
                            impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque
                            libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipP2HZMZGZsKatQCf3RYsa3wE58P_CcahCCVqE6D=w408-h544-k-no"
                            alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 2</h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum
                            impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque
                            libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="src/img//fongys.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 3</h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum
                            impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque
                            libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="src/img//fondo.png" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 4</h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum
                            impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque
                            libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="src/img//50.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 5</h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum
                            impedit unde
                            rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque
                            libero non sunt
                            harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="src/img//decora.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- About Section -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="src/img//logo-globomarket-fondo.png" alt="logo">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">Acerca de <span>Nosotros</span></h1>
                <h2>Misión</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum
                    beatae atque
                    repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
                    exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident
                    suscipit magni!
                    Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut,
                    deserunt
                    reprehenderit libero enim!</p>
                <a href="#services" class="cta">Conoce lo que hacemos</a>
            </div>
        </div>
    </section>
    <!-- End About Section -->


    <!-- Contact Section -->
    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="section-title">Contacta <span>nos</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/?size=512&id=108653&format=png" /></div>
                    <div class="contact-info">
                        <h1>Teléfono</h1>
                        <h2>+52 477 405 82 25</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>globomarket@hotmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">

                    <div class="contact-info">
                        <h1>Dirección</h1>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.013295156519!2d-101.67651752559335!3d21.15186918354044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbed8a6b62dd9%3A0xb2fddee1101368f0!2sGloboMarket!5e0!3m2!1ses-419!2smx!4v1683356595280!5m2!1ses-419!2smx"
                            width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111E90ff" fill-opacity="1"
            d="M0,160L48,144C96,128,192,96,288,117.3C384,139,480,213,576,240C672,267,768,245,864,234.7C960,224,1056,224,1152,192C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <!-- Footer -->
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
                            src="src/img//iconTwitter.png" /></a>
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
    <script src="src\js\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>