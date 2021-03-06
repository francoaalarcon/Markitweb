<?php
    include_once 'includes/dbh.inc.php';

    $sql = "INSERT INTO correos (correousuario) VALUES ('";

    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail($red, $subj, $vara, $varb){
        $name = "Markit Agencia Digital";  // Name of your website or yours
        $to = "info@agenciamarkit.com";  // mail of reciever
        $subject = $subj;
        $body = $red;
        $from = "info@agenciamarkit.com";  // you mail
        $password = '$$Markit$$2022';  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.zoho.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 465;  // port
        $mail->SMTPSecure = "ssl";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            echo $vara;
        } else {
            echo $varb;
        }
    }

    if(isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $userEmail = $_POST['email'];
            $body2 = "";
            $body2 .= "Correo de Usuario: ".$userEmail."\r\n";
            $subject2 = "Entrada de Newsletter de Markit";
            $var1 = '<script language="javascript">alert("Gracias por suscribirte a nuestro bolet??n.");</script>';
            $var2 = '<script language="javascript">alert("Hubo un error al registrarte en nuestro bolet??n, por favor revisa tu correo.");</script>';
            $sql .=$userEmail."');";
            mysqli_query($conn,$sql);
            sendmail($body2, $subject2, $var1, $var2);
        }
    }
    if(isset($_POST['email2']) && $_POST['email2'] != ''){
        if(filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL)){
            $userEmail2 = $_POST['email2'];
            $body3 = "";
            $body3 .= "Correo de Usuario: ".$userEmail."\r\n";
            $subject3 = "Entrada de Newsletter de Markit";
            $var3 = '<script language="javascript">alert("Gracias por suscribirte a nuestro bolet??n.");</script>';
            $var4 = '<script language="javascript">alert("Hubo un error al registrarte en nuestro bolet??n, por favor revisa tu correo.");</script>';
            $sql .=$userEmail2."');";
            mysqli_query($conn,$sql);
            sendmail($body3, $subject3, $var3, $var4);
        }
    }
    if(isset($_POST['correo']) && $_POST['correo'] != ''){
        if(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $sujeto = $_POST['sujeto'];
            $mensaje = $_POST['mensaje'];
            $body4 = "<h2>Entrada de Formulario de Markit</h2>";
            $body4 .= "Nombre: ".$nombre."<br>";
            $body4 .= "Tel??fono: ".$telefono."<br>";
            $body4 .= "Correo: ".$correo."<br>";
            $body4 .= "Subjeto: ".$sujeto."<br>";
            $body4 .= "Mensaje: ".$mensaje."<br>";
            $subject4 = "Entrada de Formulario de Markit";
            $var5 = '<script language="javascript">alert("Formulario enviado, nos pondremos en contacto lo mas pronto posible.");</script>';
            $var6 = '<script language="javascript">alert("Hubo un error al enviar el formulario, por favor revisar los datos ingresados.");</script>';
            sendmail($body4, $subject4, $var5, $var6);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Markit Agencia Digital</title>
    <meta content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="Agencia, Digital, Markit, Marketing, Lima, Per??, Dise??o, Web, Grafico, Publicidad, Negocio" name="keywords">
    <meta content="??Aumenta tus ventas y visibilidad de tu negocio o emprendimiento con nuestro paquetes digitales!" name="description">
    <meta name= "robots" value= "Index, Follow">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/splide/splide.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->    
    <link href="css/style.css?v=1.7" rel="stylesheet">
</head>

<body>
    
    <!-- Video Start -->
    <div class="videointerface">
        <div class="vi_videoc">
            <div class="vi_videocc">
                <video width="100%" src="https://scontent.cdninstagram.com/v/t50.16885-16/10000000_396640288293182_5532877266795604748_n.mp4?efg=eyJ2ZW5jb2RlX3RhZyI6InZ0c192b2RfdXJsZ2VuLjEyODAuaWd0di5kZWZhdWx0IiwicWVfZ3JvdXBzIjoiW1wiaWdfd2ViX2RlbGl2ZXJ5X3Z0c19vdGZcIl0ifQ&_nc_ht=instagram.flim16-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=x1-cRbAotRIAX87vpFe&edm=ALQROFkBAAAA&vs=17880398012075418_2361866059&_nc_vs=HBksFQAYJEdJQ1dtQUFfd1h3RHZtZ0JBQXlyTDBtUHVzaE1idlZCQUFBRhUAAsgBABUAGCRHSW5LU3dqUG1UVjFHcG9CQUJvRjNaRjRUUVpDYnZWQkFBQUYVAgLIAQAoABgAGwGIB3VzZV9vaWwBMRUAACa0m5XOj4jDPxUCKAJDMywXQE%2BZmZmZmZoYEmRhc2hfYmFzZWxpbmVfMV92MREAdewHAA%3D%3D&_nc_rid=11449a8e2f&ccb=7-4&oe=62872995&oh=00_AT8Znw5768Dmv8KUdMaSlhWU5dNjF9MAOO7ZhX5v5Vxw3g&_nc_sid=30a2ef" controls controlsList="nodownload"></video>
            </div>
            <div class="vi_videoccx">
                <div class="vi_videoccxc" id="buttonclosevideo">
                    <i class="bi bi-x fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->

    <a href="" class="whatsappfloat" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
    <div class="whatsappfloatmessage">
        Hola! Contactanos mediante Whatsapp
    </div>



    <!-- Servicios Blocks Start -->
    <div class="serviciosblock" id="sbit1">
        <div class="sb_item_c">
            <div class="sb_item">
                <div class="service-item2 d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-brush fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Dise??o Grafico</h5>
                    <p class="px-4">Producimos obra gr??fica digital e impresa que generar?? impacto para su marca. Captamos los valores de tu empresa. </p>
                    <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitclose1">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="serviciosblock" id="sbit2">
        <div class="sb_item_c">
            <div class="sb_item">
                <div class="service-item2 d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-window fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Dise??o Web</h5>
                    <p>Lleve su negocio al mundo digital brindando a sus clientes un sitio web profesional, atractivo y amigable.</p>
                    <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitclose2">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="serviciosblock" id="sbit3">
        <div class="sb_item_c">
            <div class="sb_item">
                <div class="service-item2 d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-meta fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Gestion de Redes Sociales</h5>
                    <p>Te ayudaremos a hallar el estilo y el tono de comunicaci??n ideal para tu compa????a para expresarte en redes sociales.</p>
                    <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitclose3">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="serviciosblock" id="sbit4">
        <div class="sb_item_c">
            <div class="sb_item">
                <div class="service-item2 d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-people-fill fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Publicidad Digital (SEM)</h5>
                    <p>Sea cual sea tu prop??sito publicitario te ayudaremos a alcanzarlo en los diversos formatos de las plataformas de difusi??n.</p>
                    <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitclose4">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="serviciosblock" id="sbit5">
        <div class="sb_item_c">
            <div class="sb_item">
                <div class="service-item2 d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-bar-chart-line-fill fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Marketing Digital</h5>
                    <p>Te ayudamos a enlazar tu firma con tus clientes a trav??s de canales digitales plataformas sociales y demasiado mas.</p>
                    <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitclose5">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="serviciosblock" id="sbit6">
        <div class="sb_item_c">
            <div class="sb_item">
                <div class="service-item2 d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="bi bi-shop fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Asesoria E-commerce</h5>
                    <p>Desarrollamos tiendas virtuales amigables que te ayudar??n a ofrecer tus productos de manera din??mica en internet.</p>
                    <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitclose6">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>-->
                    <div class="logob1">
                        <img src="img/logo2.png" alt="Logo"> 
                    </div>
                    <div class="logob2">
                        <img src="img/logo.png" alt="Logo"> 
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#" class="nav-item nav-link">Inicio</a>
                        <a href="#acercade" class="nav-item nav-link">Acerca de</a>
                        <a href="#servicios" class="nav-item nav-link">Servicios</a>
                        <a href="#clientes" class="nav-item nav-link">Clientes</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="#contacto" class="nav-item nav-link">Contacto</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-twoary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-twoary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> -->
                </div>
            </nav>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Potenciamos tu estilo de negocio</h1>
                            <p class="text-white pb-3 animated zoomIn">??Aumenta tus ventas y visibilidad de tu negocio o emprendimiento con nuestro paquetes digitales!</p>
                            <a href="https://api.whatsapp.com/send?phone=51991712113&text=Hola!%20Estoy%20interesado%20en%20aumentar%20mis%20ventas%20y%20visibilidad%20de%20mi%20negocio" target="_blank" class="btn btn-light py-sm-3 px-sm-5 rounded-pill mx-2 mb-2 animated slideInLeft">Cotizaci??n Gratis</a>
                            <a href="https://api.whatsapp.com/send?phone=51991712113&text=Hola!%20Estoy%20interesado%20en%20aumentar%20mis%20ventas%20y%20visibilidad%20de%20mi%20negocio" target="_blank" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill mx-2 mb-2  animated slideInRight">Contacta con nosotros</a>
                        </div>
                        <div class="col-lg-6 text-center d-flex justify-content-center text-lg-start">
                            <!-- <img class="img-fluid" src="img/hero.png" alt=""> -->
                            <div class="laptopc">
                                <div class="laptopc_img rounded3"></div>
                                <div class="insidelaptopc">
                                    <div class="insidelaptopcc">
                                        <section class="splide" aria-label="Carousel Markit Webs">
                                            <div class="splide__track">
                                                  <ul class="splide__list">
                                                        <li class="splide__slide">
                                                            <div class="laptopsize" style="background-image:url(img/imageweb1.jpg);"></div>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <div class="laptopsize" style="background-image:url(img/imageweb2.jpg);"></div>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <div class="laptopsize" style="background-image:url(img/imageweb3.jpg);"></div>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <div class="laptopsize" style="background-image:url(img/imageweb4.jpg);"></div>
                                                        </li>
                                                        <li class="splide__slide">
                                                            <div class="laptopsize" style="background-image:url(img/imageweb5.jpg);"></div>
                                                        </li>
                                                  </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <!-- <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-fluid py-5" id="acercade">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Acerca de</h6>
                            <div class="titlebien">
                                <div class="titlebien1">
                                    <h2>Bienvenidos a</h2>
                                </div>
                                <div class="titlebien2">
                                    <div class="titlebien2c">
                                        <img src="img/logo3.png" alt="Logo Markit" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Somos una agencia de Marketing digital especializada en estrategias digitales que llevar??n tu negocio al siguiente nivel. ????????</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Tecnicas de Vanguardia</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Personal profesional</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Soporte 24/7</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Precios competitivos</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="#servicios">Leer m??s</a>
                            <a class="btn btn-outline-primary btn-square me-3" target="_blank" href="https://www.facebook.com/search/top?q=markit%20agencia%20digital"><i class="fab fa-facebook-f"></i></a>
                            <!-- <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a> -->
                            <a class="btn btn-outline-primary btn-square me-3" href="https://www.instagram.com/markitagenciadigital/"><i class="fab fa-instagram"></i></a>
                            <!-- <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 dropstart d-flex justify-content-center">
                        <img class="img-fluid wow zoomIn rounded2" data-wow-delay="0.5s" src="img/videothumbnail.png">
                        <div class="pbc_c">
                            <div class="pbc_c_c wow zoomIn" data-wow-delay="1s">
                                <div class="service-icon flex-shrink-0" id="buttonopenvideo">
                                    <i class="bi bi-play fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-fluid bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Listo para comenzar?</h3>
                        <!-- <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small> -->
                        <div class="position-relative w-100 mt-3">
                            <form action="index.php" method="POST">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email" name="email" placeholder="Escribe tu E-mail" style="height: 48px;">
                                <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid imgcohete" src="img/cohete.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-fluid py-5" id="servicios">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Nuestros servicios</h6>
                    <h2 class="mt-2">Qu?? soluciones ofrecemos</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-brush fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Dise??o Grafico</h5>
                            <p>Producimos obra gr??fica digital e impresa que generar?? impacto para su marca. Captamos los valores de tu empresa. </p>
                            <a href="/diseno-grafico/" class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitopen1">Leer m??s</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-window fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Dise??o Web</h5>
                            <p>Lleve su negocio al mundo digital brindando a sus clientes un sitio web profesional, atractivo y amigable.</p>
                            <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitopen2">Leer m??s</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-meta fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Gestion de Redes Sociales</h5>
                            <p>Te ayudaremos a hallar el estilo y el tono de comunicaci??n ideal para tu compa????a para expresarte en redes sociales.</p>
                            <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitopen3">Leer m??s</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-people-fill fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Publicidad Digital (SEM)</h5>
                            <p>Sea cual sea tu prop??sito publicitario te ayudaremos a alcanzarlo en los diversos formatos de las plataformas de difusi??n.</p>
                            <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitopen4">Leer m??s</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-bar-chart-line-fill fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Marketing Digital</h5>
                            <p>Te ayudamos a enlazar tu firma con tus clientes a trav??s de canales digitales plataformas sociales y demasiado mas.</p>
                            <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitopen5">Leer m??s</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-shop fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Asesoria E-commerce</h5>
                            <p>Desarrollamos tiendas virtuales amigables que te ayudar??n a ofrecer tus productos de manera din??mica en internet.</p>
                            <a class="btn px-3 mt-auto mx-auto cursor_pointer" id="sbitopen6">Leer m??s</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-fluid py-5" id="clientes">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Nuestros Clientes</h6>
                    <h2 class="mt-2">Nuestros servicios brindados a empresas</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">Todos</li>
                            <li class="btn px-3 pe-4" data-filter=".one">Empresas</li>
                            <li class="btn px-3 pe-4" data-filter=".two">Emprendedores</li>
                            <li class="btn px-3 pe-4" data-filter=".three">Influencers</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">ZHENGUE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">PICA PICA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">LA VACHE FOLLE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">BACKSTAGE TATTOO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">LIMPIEZAS KRISTAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">KANDAR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item one">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-7.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">VITTORIA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item two">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-8.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">FIORELA FITCOACH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item two">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-9.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="btncontfl">
                                    <a class="btn btn-light" href="#" target="_blank"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                </div>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">SIETE SECRETOS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-5 d-flex justify-content-center">
                <a class="btn btn-primary rounded-pill px-4 me-3" href="/clientes/">Ver m??s</a>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="container-fluid bg-primary testimonial py-5 my-5">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Destacamos en MARKIT la innovaci??n, creatividad, compromiso e inmediatez para poner a nuestra disposici??n una gama de soluciones digitales enfocadas en resultados."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Torres de San Agustin</h6>
                                <small>Jorge Carmona</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Cada d??a hay m??s competencia, pero no todos est??n en internet, al crear una p??gina web con MARKIT nos mantenemos un paso adelante de tu competencia, cada d??a estamos m??s conectados a internet."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Limpieza Kristal</h6>
                                <small>Jhosep</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Valoro enormemente la creatividad y la estrategia que tiene MARKIT, es un pilar important??simo dentro de la publicidad de nuestra empresa."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">FORM Per??</h6>
                                <small>Marco Ch??vez</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Fue una grata experiencia para nosotros. MARKIT comprendi?? todas nuestras necesidades. ??Hicieron un gran trabajo! Sin duda alguna, lo mejor del proceso, fue la receptividad y r??pida respuesta de cada uno de sus integrantes en el proyecto."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Milky Per??</h6>
                                <small>Marlon</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Nuestro Equipo</h6>
                    <h2 class="mt-2">Conoce a nuestros miembros de equipo</h2>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/cristian.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Cristian Blondet</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/romina.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Romina Lozano</h5>
                                <small>Public Relations Coordinator</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/diego 2.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Diego Cordova</h5>
                                <small>Chief Manager</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/jose.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Jos?? Vildoso</h5>
                                <small>Chief Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/luis.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Luis Gutierrez</h5>
                                <small>Audiovisual Producer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/ivan.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Ivan Sotomayor</h5>
                                <small>Account Executive</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/diego.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Diego Torres</h5>
                                <small>Account Executive</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;"
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-80" src="img/franco.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Franco Alarc??n</h5>
                                <small>Web Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->




        <!-- Contact Start -->
        <div class="container-fluid py-5" id="contacto">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Contacta con nosotros</h6>
                            <h2 class="mt-2">Contacto Para Cualquier Consulta</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form action="index.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre">
                                            <label for="name">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="phone" name="telefono" placeholder="Telefono">
                                            <label for="subject">Tel??fono</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="correo" placeholder="Email">
                                            <label for="email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="sujeto" placeholder="Sujeto">
                                            <label for="subject">Sujeto</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Deja un mensaje" name="mensaje" id="message" style="height: 150px"></textarea>
                                            <label for="message">Mensaje</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Ponerse en contacto</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Calle Gral Recavarren 103, Surquillo, Lima, Per??</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+51 991 712 113</p>
                        <p><i class="fa fa-envelope me-3"></i>markit.informes@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/search/top?q=markit%20agencia%20digital"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/markitagenciadigital/"><i class="fab fa-instagram"></i></a>
                            <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Enlaces</h5>
                        <a class="btn btn-link" href="#">Inicio</a>
                        <a class="btn btn-link" href="#acercade">Acerca de</a>
                        <a class="btn btn-link" href="#servicios">Servicios</a>
                        <a class="btn btn-link" href="#clientes">Clientes</a>
                        <a class="btn btn-link" href="#contacto">Contacto</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Servicios</h5>
                        <a class="btn btn-link" href="/diseno-grafico/">Dise??o Grafico</a>
                        <a class="btn btn-link" href="/diseno-web/">Dise??o Web</a>
                        <a class="btn btn-link" href="/gestion-redes-sociales/">Gestion de Redes Sociales</a>
                        <a class="btn btn-link" href="/publicidad-digital/">Publicidad Digital (SEM)</a>
                        <a class="btn btn-link" href="/marketing-digital/">Marketing Digital</a>
                        <a class="btn btn-link" href="/asesoria-ecommerce/">Asesoria E-commerce</a>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <div class="position-relative w-100 mt-3">
                            <form action="index.php" method="POST">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" name="email2" type="text" placeholder="E-mail" style="height: 48px;">
                                <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Markit</a>, All Right Reserved 2022. 
							
							<!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                            <!-- <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#">Inicio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/splide/splide.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js?v=1.7"></script>
    <script>
        $( document ).ready(function() {
            portfolioIsotope.isotope({filter: "*"});
        });
    </script>
</body>

</html>