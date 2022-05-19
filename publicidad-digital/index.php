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
    if(isset($_POST['email2']) && $_POST['email2'] != ''){
        if(filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL)){
            $userEmail2 = $_POST['email2'];
            $body3 = "";
            $body3 .= "Correo de Usuario: ".$userEmail."\r\n";
            $subject3 = "Entrada de Newsletter de Markit";
            $var3 = '<script language="javascript">alert("Gracias por suscribirte a nuestro boletín.");</script>';
            $var4 = '<script language="javascript">alert("Hubo un error al registrarte en nuestro boletín, por favor revisa tu correo.");</script>';
            $sql .=$userEmail2."');";
            mysqli_query($conn,$sql);
            sendmail($body3, $subject3, $var3, $var4);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Markit Agencia Digital</title>
    <meta content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="Agencia, Digital, Markit, Marketing, Lima, Perú, Diseño, Web, Grafico, Publicidad, Negocio" name="keywords">
    <meta content="¡Aumenta tus ventas y visibilidad de tu negocio o emprendimiento con nuestro paquetes digitales!" name="description">
    <meta name= "robots" value= "Index, Follow">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
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
                <a href="../#" class="navbar-brand p-0">
                    <!-- <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>-->
                    <div class="logob1">
                        <img src="../img/logo2.png" alt="Logo"> 
                    </div>
                    <div class="logob2">
                        <img src="../img/logo.png" alt="Logo"> 
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="../#" class="nav-item nav-link">Inicio</a>
                        <a href="../#acercade" class="nav-item nav-link">Acerca de</a>
                        <a href="../#servicios" class="nav-item nav-link">Servicios</a>
                        <a href="../#clientes" class="nav-item nav-link">Clientes</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="../#contacto" class="nav-item nav-link">Contacto</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-twoary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-twoary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> -->
                </div>
            </nav>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Publicidad Digital (SEM)</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="../">Inicio</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Publicidad Digital (SEM)</li>
                                </ol>
                            </nav>
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
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Publicidad Digital (SEM)</h6>
                            <h2 class="mt-2">Titulo para Publicidad Digital (SEM)</h2>
                        </div>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    </div>
                    <div class="col-lg-6">
                        <img class="../img-fluid wow zoomIn" data-wow-delay="0.5s" src="../img/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <img class="../img-fluid wow zoomIn" data-wow-delay="0.5s" src="../img/about.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="galleryimagesc">
            <div class="gic_img1 gic_bg" style="background-image: url(../img/imageweb1.jpg);">

            </div>
            <div class="gic_img2 gic_bg" style="background-image: url(../img/imageweb4.jpg);">
                
            </div>
            <div class="gic_img3 gic_bg" style="background-image: url(../img/imageweb3.jpg);">
                
            </div>
            <div class="gic_img4 gic_bg" style="background-image: url(../img/videothumbnail.png);">
                
            </div>
            <div class="gic_img5 gic_bg" style="background-image: url(../img/imageweb5.jpg);">
                
            </div>
            <div class="gic_img6 gic_bg" style="background-image: url(../img/imageweb2.jpg);">
                
            </div>
        </div>

        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Ponerse en contacto</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Calle Gral Recavarren 103, Surquillo, Lima, Perú</p>
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
                        <a class="btn btn-link" href="../#">Inicio</a>
                        <a class="btn btn-link" href="../#acercade">Acerca de</a>
                        <a class="btn btn-link" href="../#servicios">Servicios</a>
                        <a class="btn btn-link" href="../#clientes">Clientes</a>
                        <a class="btn btn-link" href="../#contacto">Contacto</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Servicios</h5>
                        <a class="btn btn-link" href="../diseno-grafico/">Diseño Grafico</a>
                        <a class="btn btn-link" href="../diseno-web/">Diseño Web</a>
                        <a class="btn btn-link" href="../gestion-redes-sociales/">Gestion de Redes Sociales</a>
                        <a class="btn btn-link" href="../publicidad-digital/">Publicidad Digital (SEM)</a>
                        <a class="btn btn-link" href="../marketing-digital/">Marketing Digital</a>
                        <a class="btn btn-link" href="../asesoria-ecommerce/">Asesoria E-commerce</a>
                    </div>
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
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                            <!-- <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="../#">Inicio</a>
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>