
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
                        <a href="./index.php"><img src="../Resource/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Inicio</a></li>
                                <li class="active"><a href="./about.php">Sobre Nosotros</a></li>
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="../Resource/img/fondoheader.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> QUIENES SOMOS?</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Inicio</a>
                            <span style=" color: #ffffff;">Sobre Nosotos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <span>CONÓCENOS</span>
                            <h2>Cual es nuestra Misión y Visión?</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                   <!-- <div class="services__item__icon">
                                        <img src="../Resource/img/icons/si-3.png" alt="">
                                    </div>-->
                                    <h4>Visión</h4>
                                    <p>"Nuestra visión en Vans y Vanes Aeropuerto Cartagena de 
                                        Indias SAS es convertirnos en la empresa más reconocida y 
                                        confiable en Cartagena, siendo líderes en la prestación de 
                                        servicios de transporte. Nos esforzamos por ser la opción 
                                        preferida tanto para los residentes locales como para los turistas,
                                        destacándonos por la excelencia en el servicio, la visibilidad en el 
                                        mercado y la confiabilidad en cada viaje. Aspiramos a ser un referente 
                                        en la industria del transporte en Cartagena, marcando la pauta en calidad 
                                        y satisfacción del cliente."</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                   
                                    <h4>Misión</h4>
                                    <p>"Nuestra misión en Vans y Vanes Aeropuerto Cartagena de Indias SAS 
                                        es ser la principal empresa de transporte en Cartagena, comprometida 
                                        en brindar un servicio excepcional a nuestros clientes y turistas. 
                                        Nos esforzamos constantemente por ofrecer soluciones de transporte seguras, 
                                        eficientes y cómodas que superen las expectativas de quienes confían en nosotros. 
                                        Nuestro objetivo principal es ser reconocidos como líderes en la satisfacción del 
                                        cliente, garantizando la excelencia en cada viaje y contribuyendo al desarrollo 
                                        turístico de Cartagena de Indias."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

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

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <!-- <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Recoridos completados</p>
                            </div>
                        </div>-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">974</h2>
                                <p>Clientes Felices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                            <img src="../Resource/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Recoridos completados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--<div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="../Resource/img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>-->
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
                        <span>ENCANTADOS DE CONOCERTE</span>
                        <h2>NUESTRO TEAM</h2>
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
                <!-- <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- Team Section End -->

   <!-- Footer Section Begin -->
   <footer class="footer">
        <div class="container" text-justify>
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
