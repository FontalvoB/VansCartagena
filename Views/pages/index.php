<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="../Resource/img/logo.jpeg" />
    <title>Vans y Vanes Aeropuerto Cartagena De Indias SAS</title>
    
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Resource/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Resource/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Resource/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Resource/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Resource/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../Resource/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Resource/css/style.css" type="text/css">
</head>
<?php
require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

date_default_timezone_set('America/Bogota');
?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="../Resource/img/logo-bg.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Inicio</a></li>
                                <li><a href="./about.php">Sobre Nosotros</a></li>
                                <li><a href="./portfolio.php">Portafolio</a></li>
                                <li><a href="./services.php">Servicios</a></li>
                                <li><a href="./contact.php">Contáctanos</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="https://instagram.com/vansyvanesctg?igshid=NzZlODBkYWE4Ng==" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="../Resource/img/hero/mercedesnegra3.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Viaja con nosotros!</span>
                                <h2>Vans y Vanes Aeropuerto Cartagena De Indias SAS</h2>
                                <a href="./about.php" class="primary-btn">Ver más sobre nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="../Resource/img/hero/mercedesnegra3.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Conoce y recorre paisajes y lugares con nosotros!</span>
                                <h2>Vans y Vanes Aeropuerto Cartagena De Indias SAS</h2>
                                <a href="./about.php" class="primary-btn">Ver más sobre nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="../Resource/img/hero/mercedesnegra3.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Disfruta con nosotros, tu felicidad también hace parte de la nuestra!</span>
                                <h2>Vans y Vanes Aeropuerto Cartagena De Indias SAS</h2>
                                <a href="./about.php" class="primary-btn">Ver más sobre nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                        <span> NUESTROS SERVICIOS</span>
                            <h2>¿QUÉ HACEMOS?</h2>
                        </div>

                        <p>VANS Y VANES AEROPUERTO CARTAGENA DE INDIAS SAS abarca una amplia gama de 
                            servicios de transporte privado en Cartagena, diseñados para satisfacer las 
                            necesidades tanto de turistas como de empresas, y garantizar una estancia 
                            inolvidable en esta hermosa ciudad costera de Colombia.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="../Resource/img/icons/tour.png" alt="">
                                </div>
                                <h4>Tours Privados</h4>
                                <p>Exploraciones personalizadas por los lugares más emblemáticos de 
                                    Cartagena y sus alrededores.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="../Resource/img/icons/aeropuerto.png" alt="">
                                </div>
                                <h4>Transfer Aeropuerto-Hotel</h4>
                                <p>Transporte eficiente y  cómodo desde el aeropuerto hasta el hotel y viceversa.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="../Resource/img/icons/yate.png" alt="">
                                </div>
                                <h4>Renta de Botes y Yates</h4>
                                <p>Opciones de alquiler de embarcaciones para explorar el hermoso litoral caribeño.</p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">

                                    <img src="../Resource/img/icons/apartamento.png" alt="">
                                </div>
                                <h4>Renta de Apartamentos</h4>
                                <p>Oferta de apartamentos privados para estadías cómodas y privadas.</p>

                            </div>
                        </div>
                        <a href="./services.php" class="primary-btn">Ver todos los servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="../Resource/img/portfolio/yate5.jpeg">
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="../Resource/img/portfolio/yate2.jpeg">
            </div>
            <div class="work__item small__item set-bg" data-setbg="../Resource/img/portfolio/mercedesnegra2.jpeg">
            </div>
            <div class="work__item large__item set-bg" data-setbg="../Resource/img/portfolio/yate6.jpeg">
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="../Resource/img/portfolio/mercedesblanca4.jpeg">
            </div>
            <div class="work__item small__item set-bg" data-setbg="../Resource/img/portfolio/mercedesnegra4.jpeg">
            </div>
            <div class="work__item wide__item set-bg" data-setbg="../Resource/img/portfolio/yate4.jpeg">
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin 
    <section class="team spad set-bg" data-setbg="../Resource/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Encantados de conocerte</span>
                        <h2>Nuestro Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="../Resource/img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="../Resource/img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="../Resource/img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="../Resource/img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="./about.php" class="primary-btn">Conoce nuestro team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

     <!-- Testimonial Section Begin -->
     <section class="testimonial spad set-bg" data-setbg="../Resource/img/portfolio/lancha2.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Amado por los clientes</span>
                        <h2>Que dicen los clientes?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            
                <div class="testimonial__slider owl-carousel">
                <?php foreach ($HomeController->VerComentarios() as $key) : ?>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p><?php echo $key->__GET('Comentario')?></p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="../Resource/img/testimonial/bandeja.png" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5><?php echo  $key->__GET('Nombre')?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

     <!-- Blog Details Section Begin -->
     <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__comment">
                            <h4>Quieres dejarnos un comentario?</h4>
                            <form action="../../Actions/Comentario/EnviarComentario.php" method="POST">
                                <div class="input__list">
                                    <input type="text" name="nombre" placeholder="Nombre">
                                    <input type="email" name="correo"placeholder="Email">
                                    <input type="number" name="telefono"placeholder="Teléfono">
                                </div>
                                <textarea name="comentario" placeholder="Comentario"></textarea>
                                <button type="submit" class="site-btn">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

    <!-- Latest Blog Section Begin 
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin 
    <section class="callto spad set-bg" data-setbg="../Resource/img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href="#">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="../Resource/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                        <a href="https://instagram.com/vansyvanesctg?igshid=NzZlODBkYWE4Ng==" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>Nuestro Servicios</h5>
                            <p>Abarcamos una amplia gama de servicios de transporte privado en Cartagena, 
                                diseñados para satisfacer las necesidades tanto de turistas como de empresas, 
                                y garantizar una estancia inolvidable en esta hermosa ciudad costera de Colombia.</p>
                            <a href="./services.php" class="read__more">Leer Más <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Conócenos</h5>
                            <ul>
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="./about.php">Sobre Nosotros</a></li>
                                <li><a href="./portfolio.php">Portafolio</a></li>
                                <li><a href="./services.php">Servicios</a></li>
                                <li><a href="./contact.php">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Quiénes Somos</h5>
                            <ul>
                                <li><a href="./about.php">Misión</a></li>
                                <li><a href="./about.php">Visión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Todos los derechos reservados Versión 1.0 | Está pagina fue creada <i class="fa fa-heart-o"
                                aria-hidden="true"></i> por J&J</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../Resource/js/jquery-3.3.1.min.js"></script>
    <script src="../Resource/js/bootstrap.min.js"></script>
    <script src="../Resource/js/jquery.magnific-popup.min.js"></script>
    <script src="../Resource/js/mixitup.min.js"></script>
    <script src="../Resource/js/masonry.pkgd.min.js"></script>
    <script src="../Resource/js/jquery.slicknav.js"></script>
    <script src="../Resource/js/owl.carousel.min.js"></script>
    <script src="../Resource/js/main.js"></script>
</body>

</html>