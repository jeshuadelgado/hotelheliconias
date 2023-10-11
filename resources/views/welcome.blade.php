<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hotel las Heliconias</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/hotelh.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/estilo.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a style="font-size:23px;color: white" class="navbar-brand" href="#page-top">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a style="color: white" class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a style="color: white" class="nav-link" href="#portfolio">Portafolio</a></li>
                        <li class="nav-item"><a style="color: white" class="nav-link" href="#team">Tarifas y Precios</a></li>
                        <li class="nav-item"><a style="color: white" class="nav-link" href="#prom">Planes y Promociones</a></li>
                        <li class="nav-item"><a style="color: white" class="nav-link" href="#contact">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('loginForm') }}">{{ __('Inicio Sesión') }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container-a">
                <div style="color: white" class="masthead-heading text-uppercase">Bienvenido al Hotel las Heliconias!</div> 
                <i class='far fa-arrow-alt-circle-down' style='font-size:80px;color:white'></i>
                <br>
                <br>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ asset('pdf/PoliticadeReservas.pdf') }}" target="_blank">Descargue y Conozca Nuestra Nueva Politica de Reservas</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Nuestros servicios excepcionales están diseñados para satisfacer las necesidades tanto de viajeros de negocios como de aquellos que buscan un escape relajante. </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <i class='fas fa-coffee' style='font-size:100px;'></i>
                        <h4 class="my-3">Desayuno</h4>
                        <p class="text-muted">Despierte y disfrute de nuestros deliciosos desayunos en el hotel.</p>
                    </div>
                    <div class="col-md-4">
                        <i class='fas fa-hiking' style='font-size:100px;'></i>
                        <h4 class="my-3">Areas Naturales</h4>
                        <p class="text-muted">¡Disfruta de la naturaleza en nuestro hotel! Descubre áreas naturales llenas de encanto y serenidad.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-water" style='font-size:100px;'></i> 
                        <h4 class="my-3">Piscina Termal</h4>
                        <p class="text-muted">Descubra nuestro paraíso termal en el hotel. Relájese en nuestra piscina termal.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <p>
                </p>
                <div class="row text-center">
                    <div class="col-md-4">
                        <i class='fas fa-wifi' style='font-size:100px;'></i>
                        <h4 class="my-3">Zonas Wifi</h4>
                        <p class="text-muted">¡Conéctate sin límites! Disfruta de 5 zonas WiFi en nuestro hotel.</p>
                    </div>
                    <div class="col-md-4">
                        <i class='fas fa-tshirt' style='font-size:100px;'></i>
                        <h4 class="my-3">Lavanderia</h4>
                        <p class="text-muted">¡Elevamos su comodidad al siguiente nivel! Con nuestro servicio de lavandería en el hotel, su ropa siempre estará fresca y lista para impresionar.</p>
                    </div>
                    <div class="col-md-4">
                        <i class='fas fa-parking' style='font-size:100px;'></i>
                        <h4 class="my-3">Parqueadero</h4>
                        <p class="text-muted">¡Estacionamiento gratuito y seguro en nuestro hotel! Tu comodidad es nuestra prioridad.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Descubra el encanto de nuestro hotel a través de nuestro cautivador portafolio de fotos. Cada imagen es una promesa de experiencias inolvidables.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bloque Habitaciones</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cabañas</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/7.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Eventos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Areas Naturales</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Piscina Termal</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Restaurante</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Tarifas y Precios-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tarifas y Precios</h2>
                    <h3 class="section-subheading text-muted">En nuestro hotel, encontrarás tarifas competitivas y opciones para todos los presupuestos. Contáctanos para conocer nuestros precios y ofertas actuales. ¡Esperamos verte pronto!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-18">
                        <div class="team-member">
                            <img class="" src="assets/img/team/tarifas.jpg" alt="..." />
                        </div>
                    </div>
            </div>
        </section>

        <!-- Tarifas y Precios-->
        <section class="page-section bg-light" id="prom">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Planes y Promociones</h2>
                    <h3 class="section-subheading text-muted">Nuestro hotel se enorgullece de ofrecer una amplia variedad de planes y promociones diseñadas para satisfacer tus necesidades y superar tus expectativas.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-18">
                        <div class="team-member">
                            <img class="" src="assets/img/team/promociones.png" alt="..." />
                        </div>
                    </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contáctenos</h2>
                    <h3 lass="section-subheading text-muted">¿Necesitas ayuda o información adicional? ¡Contáctanos en cualquier momento! Estamos aquí para atenderte.</h3>
                <p>
                </p>
                </div>
                    <div class="text-center"><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd1cKS9Vh0ttx2Lg187j3GMHLLuHLfVcF6AWJRouJowSyA0sQ/viewform?embedded=true" width="640" height="959" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Hotel Campestre Las Heliconias - Zetaquira - Boyacá /  Vereda Patanoa &copy; 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://wa.me/message/X6KFXOGNMOA6C1" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://web.facebook.com/LasHeliconiasZetaquira/?locale=es_LA&_rdc=1&_rdr" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.instagram.com/explore/locations/572924831/hotel-campestre-las-heliconias-zetaquira/" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.youtube.com/watch?v=D21Tqezo2rw" aria-label="youtube"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" href="mailto:hotellasheliconias.hclh@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        <a class="btn btn-dark btn-social mx-2" target="_blank" href="tel:+573156124428" aria-label="Phone"><i class="fas fa-phone"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Todos los derechos reservados.</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Bloque Habitaciones</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.png" alt="..." />
                                    <h5>Nuestros bloques de habitaciones te brindan una experiencia incomparable en hospitalidad. Disfruta de amplias y elegantes habitaciones, todas cuidadosamente diseñadas para tu confort. Cada bloque cuenta con una variedad de opciones de alojamiento, desde habitaciones estándar hasta suites de lujo, para satisfacer tus necesidades y preferencias individuales.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cabañas</h2>
                                    <p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.png" alt="..." />
                                    <h5>En nuestro hotel, nos enorgullece ofrecer a nuestros huéspedes una experiencia única y auténtica. Ven y descubre el encanto de nuestras cabañas, donde la comodidad se combina con la naturaleza en un equilibrio perfecto. ¡Haz tu reserva hoy y sumérgete en la serenidad de nuestras cabañas en el paraíso!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Eventos</h2>
                                    <p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/7.png" alt="..." />
                                    <h5>"En nuestro hotel, creamos momentos inolvidables. ¿Estás planeando un evento especial? Ya sea una boda elegante, una conferencia corporativa o una celebración familiar, estamos aquí para hacer que tu evento sea extraordinario.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Areas Naturales</h2>
                                    <p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.png" alt="..." />
                                    <h5>Nos enorgullece ofrecer a nuestros huéspedes una experiencia única en la que la naturaleza se convierte en tu mejor compañera de viaje. Nuestro entorno está rodeado de exuberantes paisajes naturales que te sumergirán en un mundo de serenidad y tranquilidad.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Piscina Termal</h2>
                                    <p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.png" alt="..." />
                                    <h5>¡Sumérgete en una experiencia de relajación y bienestar como ninguna otra en nuestro hotel! Nuestra piscina termal te ofrece una escapada rejuvenecedora que te hará sentir renovado y revitalizado.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Restaurante</h2>
                                    <p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.png" alt="..." />
                                    <h5>En el corazón de nuestro hotel, te espera una experiencia culinaria única que deleitará tus sentidos. Nuestro restaurante es mucho más que un lugar para comer; es un viaje a través de los sabores, aromas y la cultura local.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
