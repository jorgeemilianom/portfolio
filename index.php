<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorge | Web Developer</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css?v=2">
    <!-- Metas -->
    <link rel="icon" href="assets/img/ico.png" type="image/png">
    <meta name="description" content="Desarrollador web Font-End y Back-End. Trabajo plenamente en mi desarrollo como Dev, buscando ampliar mis conocimientos en programación.">
        <!-- CDN ALERTS -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <nav >
        
        <div class="container">
            <div class="logo"><a href="index.html">Web Developer</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#proyects">My Proyects</a></li>
                    <!-- <li><a href="#proyects">My Jobs</a></li> -->
                    <li><a href="#contactme">Contact Me</a></li>
                </ul>
            </div>
        </div>
        <div id="scroll-progress"></div>
    </nav>
    <header class="home content" id="home">
        
        <div class="video-background">
        <video autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
            <source src="assets/bg-2.mp4" type="video/mp4">
        </video>
        </div>
        <div class="container">
            <div class="home-left">
                <h1>Hola!  <br>
                Soy Jorge<br>
                    </h1>
                    <p>
                        FrontEnd & BackEnd<br><br>
                        Desde los 15 años incursiono en el mundo del desarrollo web.
                        <br>
                        Con dedicación aprendí programación en diversos lenguajes y he desarrollado diversos proyectos, de manera individual y en quipos.
                        <br><br>
                        Autodidacta y proactivo por naturaleza.
                    </p>
                    <div class="buttons">
                        <div class="button">
                            <a href="assets/src/CV Español.pdf"  target="_blank" rel="noopener noreferrer">
                                <img src="assets/img/icons/pdf.png" alt="Mi CV en español">
                                Cv 
                            </a>
                        </div>
                        <!-- <div class="button">
                            <a href="#"  target="_blank" rel="noopener noreferrer">
                                <img src="assets/img/icons/pdf.png" alt="My CV in english">
                                Cv English
                            </a>
                        </div> -->
                        <div class="button">
                            <a href="https://github.com/jorgeemilianom/"  target="_blank" rel="noopener noreferrer">
                                <img src="assets/img/icons/github.png" alt="Perfil en GitHub">
                            </a>
                        </div>
                        <div class="button">
                            <a href="https://www.linkedin.com/in/jorgeemilianom/"  target="_blank" rel="noopener noreferrer">
                                <img src="assets/img/icons/linkedin.png" alt="Perfil en Linkedin">
                            </a>
                        </div>
                    </div>
            </div>
            <div class="home-right">
                <div class="img">
                    <img src="assets/img/code.png" alt="Imagen animada de programador">
                </div>
            </div>
        </div>
    </header>
    <!-- Seccion de skills -->
    <section class="skills" id="skills">
        <div class="skills-title ">
            <img src="assets/img/icons/skills.png" alt="Skills">
            <h2>Skills</h2>
        </div>
        <div class="flex-row">
            <!-- CORE SKILLS -->
            <div class="skills-container">
                <div class="category">
                    Core skills
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/php.svg" alt="PHP">
                        PHP
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/mysql.svg" alt="MYSQL">
                        MySQL
                    </div>
                    
                    <div class="skill ">
                        <img src="assets/img/icons/js.svg" alt="JS">
                        JavaScript
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/html.svg" alt="HTML">
                        HTML
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/css.svg" alt="CSS">
                        CSS
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/c++.svg" alt="C++">
                        C++
                    </div>
                </div>
            </div>
            <!-- Frameworks and technologies -->
            <div class="skills-container">
                <div class="category">
                    Library & Frameworks
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/jquery.png" alt="JQUERY">
                        JQuery
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/bootstrap.png" alt="BOOTSTRAP">
                        Bootstrap
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/symfony.png" alt="Symfony">
                        Symfony
                    </div>
                </div>
            </div>
            <!-- GIT AND PACKAGE MANAGER -->
            <div class="skills-container">
                <div class="category">
                    Git & Package Manager
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/git.png" alt="GIT">
                        Git
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/github.png" alt="GITHUB">
                        GitHub
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/bitbucket.png" alt="Bitbucket">
                        Bitbucket
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/npm.png" alt="NPM">
                        NPM
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/composer.png" alt="Composer">
                        Composer
                    </div>
                </div>
            </div>
             <!-- CMS -->
             <div class="skills-container">
                <div class="category">
                    CMS
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/wordpress.png" alt="WordPress">
                        WordPress
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/woocommerce.png" alt="WooCommerce">
                        WooComm.
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/elementor.png" alt="Elementor">
                        Elementor
                    </div>
                </div>
            </div>
            <!-- FUNDAMENTALS -->
            <div class="skills-container">
                <div class="category">
                    Fundamentals
                </div>
                <div class="lenguajes ">
                <div class="skill ">
                        <img src="assets/img/icons/nodejs.png" alt="NodeJS">
                        NodeJS
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/python.png" alt="Python">
                        Python
                    </div>
                </div>
            </div>
            <!-- Learning -->
            <div class="skills-container">
                <div class="category">
                    Learning
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/react.png" alt="REACT.JS">
                        React.js
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/laravel.png" alt="LARAVEL">
                        Laravel
                    </div>
                    
                </div>
            </div>
             <!-- Softwares and tools -->
             <div class="skills-container">
                <div class="category">
                    Softwares & Tools
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/postman.png" alt="Postman">
                        Postman
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/xampp.png" alt="Xampp">
                        xampp
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/figma.png" alt="Figma">
                        Figma
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/trello.png" alt="TRELLO">
                        Trello
                    </div>
                </div>
            </div>
             <!-- Technogies -->
             <div class="skills-container">
                <div class="category">
                    Technologies
                </div>
                <div class="lenguajes ">
                    <div class="skill ">
                        <img src="assets/img/icons/ajax.png" alt="AJAX">
                        AJAX
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/api.png" alt="API REST">
                        API REST
                    </div>
                    <div class="skill ">
                        <img src="assets/img/icons/doctrine.png" alt="Doctrine">
                        Doctrine
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="proyects" id="proyects">
        <div class="container">
            <div class="ico"><img src="assets/img/icons/dev.png" alt="Proyectos"></div>
            <div class="title">Mis proyectos</div>
            <div class="description">
                Estos son proyectos en los que estuve trabajando conforme iba aprendiendo a programar
            </div>
            <!-- Card list -->
            <div class="proyects-list">
                <!-- Card -->
                <div class="card ">
                    <a href="http://gesprender.com" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/gesprender.jpg" alt=""></div>
                        <div class="technologies">
                           <img src="assets/img/icons/php.svg" alt="PHP">
                           <img src="assets/img/icons/mysql.svg" alt="MYSQL">
                           <img src="assets/img/icons/jquery.png" alt="JQUERY">
                           <img src="assets/img/icons/js.svg" alt="JS">
                           <img src="assets/img/icons/html.svg" alt="HTML">
                           <img src="assets/img/icons/css.svg" alt="CSS">
                           <img src="assets/img/icons/bootstrap.png" alt="Bootstrap">
                        </div>
                        <div class="card-title">GesPrender</div>
                        <div class="card-description">Una plataforma para gestionar emprendimientos y pequeñas empresas.</div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card ">
                    <a href="http://gesprender.com/app/login.php" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/catalogoOnline.png" alt="Catalogo Online"></div>
                        <div class="technologies">
                           <img src="assets/img/icons/php.svg" alt="PHP">
                           <img src="assets/img/icons/mysql.svg" alt="MYSQL">
                           <img src="assets/img/icons/jquery.png" alt="JQUERY">
                           <img src="assets/img/icons/js.svg" alt="JS">
                           <img src="assets/img/icons/html.svg" alt="HTML">
                           <img src="assets/img/icons/css.svg" alt="CSS">
                           <img src="assets/img/icons/bootstrap.png" alt="Bootstrap">
                        </div>
                        <div class="card-title">Generador de Catalogos</div>
                        <div class="card-description">Una mejora a mi plataforma para que usuarios puedan gestionar su catalogo virtual de manera sencilla.<br><b>User</b>: Test <br><b>Pass</b>: usuarioTest</div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card ">
                    <a href="https://imprentasimisol.com/" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/wordpressWC.png" alt="WooCommerce"></div>
                        <div class="technologies">
                            <img src="assets/img/icons/wordpress.png" alt="WordPress">
                            <img src="assets/img/icons/woocommerce.png" alt="WooCommerce">
                            <img src="assets/img/icons/php.svg" alt="PHP">
                            <img src="assets/img/icons/html.svg" alt="HTML">
                            <img src="assets/img/icons/css.svg" alt="CSS">
                        </div>
                        <div class="card-title">Tienda Online</div>
                        <div class="card-description">Utilizando WooCommerce realicé una tienda Online para mi imprenta. Personalicé el diseño original para una mejor estetica.</div>
                    </a>
                </div>
                
                <!-- Card -->
                <div class="card ">
                    <a href="trabajos/pagina de trading/" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/trading.png" alt="Pagina de trading"></div>
                        <div class="technologies">
                            <img src="assets/img/icons/php.svg" alt="PHP">
                            <img src="assets/img/icons/js.svg" alt="JS">
                            <img src="assets/img/icons/html.svg" alt="HTML">
                            <img src="assets/img/icons/css.svg" alt="CSS">
                            <img src="assets/img/icons/jquery.png" alt="JQUERY">
                        </div>
                        <div class="card-title">LandingPage</div>
                        <div class="card-description">Hice una landing page a un negocio de trading. Aunque actualmente ya no está activa, conservé el diseño.</div>
                    </a>
                </div>

                <!-- Card -->
                <div class="card ">
                    <a href="trabajos/CRUD-PHP/index.php" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/crud.jpg" alt="Crud en PHP"></div>
                        <div class="technologies">
                            <img src="assets/img/icons/php.svg" alt="PHP">
                           <img src="assets/img/icons/mysql.svg" alt="MYSQL">
                           <img src="assets/img/icons/js.svg" alt="JS">
                           <img src="assets/img/icons/html.svg" alt="HTML">
                           <img src="assets/img/icons/css.svg" alt="CSS">
                           <img src="assets/img/icons/bootstrap.png" alt="Bootstrap">
                        </div>
                        <div class="card-title">CRUD en PHP</div>
                        <div class="card-description">A modelo de práctica me hice un CRUD para gestionar una lista de pendientes.</div>
                    </a>
                </div>

                <!-- Card -->
                <div class="card ">
                    <a href="trabajos/bootstrap/" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/bootstrap.png" alt="Web bootstrap"></div>
                        <div class="technologies">
                            <img src="assets/img/icons/js.svg" alt="JS">
                            <img src="assets/img/icons/html.svg" alt="HTML">
                            <img src="assets/img/icons/css.svg" alt="CSS">
                            <img src="assets/img/icons/bootstrap.png" alt="BOOTSTRAP">
                        </div>
                        <div class="card-title">Web con Bootstrap</div>
                        <div class="card-description">Una landing page basica hecha con bootstrap .</div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card ">
                    <a href="trabajos/portfolioV1/" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/portfolio.png" alt="Mi primer portfolio"></div>
                        <div class="technologies">
                            <img src="assets/img/icons/js.svg" alt="JS">
                            <img src="assets/img/icons/html.svg" alt="HTML">
                            <img src="assets/img/icons/css.svg" alt="CSS">
                        </div>
                        <div class="card-title">Mi primer Portfolio</div>
                        <div class="card-description">Este fue el primer diseño de portfolio que tenía, con conocimientos más básicos.</div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card ">
                    <a href="trabajos/Piano/" target="_blank" rel="noopener noreferrer">
                        <div class="img"><img src="assets/img/trabajos/piano.jpg" alt="APP Piano"></div>
                        <div class="technologies">
                            <img src="assets/img/icons/js.svg" alt="JS">
                            <img src="assets/img/icons/html.svg" alt="HTML">
                            <img src="assets/img/icons/css.svg" alt="CSS">
                        </div>
                        <div class="card-title">Piano Online</div>
                        <div class="card-description">Una aplicaión web para poder tener un piano portatil.</div>
                    </a>
                </div>
                
                
            </div>
        </div>
    </section>
    
    <!-- Contact Me -->
    <section class="contactme" id="contactme" >
        <div class="contactme-modules">
            <div class="form">
                <div class="form-title">
                    <h2>Contactame</h2>
                    Puedes enviarme un mensaje, ya sea para solicitar un proyecto, para contratarme, sugerir alguna mejora o incluso saludarme
                </div>
                <form method="POST">
                    <input type="text" name="persona" id="persona" placeholder="Su nombre" autocomplete="off" required >
                    <input type="email" name="email" placeholder="Email" autocomplete="off" required>
                    <textarea name="mensaje" rows="3" placeholder="Su mensaje" required></textarea>
                    <input type="submit" value="Enviar">
                </form>
                <?php include('assets/includes/form.php'); ?>
            </div>
            <div class="contact">
                <div class="social-block">
                    <a href="https://www.linkedin.com/in/jorgeemilianom/" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/linkedin.png" alt="">
                        Linkedin
                    </a>
                </div>
                <div class="social-block">
                    <a href="assets/src/CV Español.pdf" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/pdf.png" alt="">
                        CV Español
                    </a>
                </div>
                <!-- <div class="social-block">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/pdf.png" alt="">
                        CV English
                    </a>
                </div> -->
                <div class="social-block">
                    <a href="https://github.com/jorgeemilianom/" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/github.png" alt="">
                        GitHub
                    </a>
                </div>
                <div class="social-block">
                    <a href="https://instagram.com/jorgeemilianom/" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/instagram.png" alt="">
                        Instagram
                    </a>
                </div>
                <div class="social-block">
                    <a href="https://wa.me/5493424416404" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/whatsapp.png" alt="">
                        Whatsapp
                    </a>
                </div>
                <div class="social-block">
                    <a href="https://tiktok.com/@jorgeemilianom" target="_blank" rel="noopener noreferrer">
                        <img src="assets/img/icons/tiktok.png" alt="">
                        TikTok
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="copy">
            Desarrollado por Jorge Emiliano Maldonado. - Todos los derechos reservados. - 2022
        </div>
        <div class="credits">
            Ilustraciones de 
            <a href="https://storyset.com/internet"> Storyset</a>
        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- script -->
    <script src="scripts.js"></script>
</body>
</html>