<?php
    session_set_cookie_params(604800);
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/font-awesome.min.js"></script>
        <script src="js/script.js"></script>
        <title>Arthur Bender - Portfolio</title>
    </head>
    <body>
        <?php

            $lang = "pt-BR";

            if ($_GET['lang'] == 'pt-BR' || $_GET['lang'] == 'en') {
                $_SESSION['lang'] = $_GET['lang'];
            }

            if(isset($_SESSION['lang'])) {
                $lang = $_SESSION['lang'];
            }

	        require_once("translations/".$lang.".php");

        ?>

        <!-- NAVBAR -->
        <div class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
            <a class="navbar-brand" href="index.php">Arthur Bender</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsed-content" aria-controls="navbar-collapsed-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapsed-content">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section"><?php echo $translate['ABOUT'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects-section"><?php echo $translate['PROJECTS'] ?></a>
                    </li>
                </ul>

                <form class="form-inline" id="navbar-language">
                    <span class="navbar-text mr-3" id="language-select-text">
                        Idioma / Language
                    </span>
                    <select class="custom-select" name="language-select" id="language-select">
                        <option value="pt-BR" <?php if ($lang == "pt-BR") {echo 'selected';} ?>>🇧🇷 Português</option>
                        <option value="en" <?php if ($lang == "en") {echo 'selected';} ?>>🇺🇸 English</option>
                    </select>
                </form>
            </div>
        </div>

        <main>
            <!-- ABOUT -->
            <div id="about-section">
                <div id="cover-image">
                    <div id="cover-gradient">
                        <h1 id="about-name">Arthur Bender</h1>
                        <h4 id="about-profession"><?php echo $translate['PROFESSION'] ?></h4>
    
                        <a href="assets/<?php echo $translate['CURRICULUM_FILE'] ?>" target="_blank" class="btn btn-lg btn-light" id="about-curriculum">
                            <i class="fa-solid fa-download"></i> <?php echo $translate['CURRICULUM'] ?>
                        </a>
    
                        <p class="mx-auto" id="about-text">
                            <?php echo $translate['TEXT'] ?>
                        </p>
    
                        <div id="links-row">
                            <a href="https://www.linkedin.com/in/arthur-bender/" target="_blank" class="btn btn-primary"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
                            <a href="https://github.com/ArthurBender" target="_blank" class="btn btn-dark"><i class="fa-brands fa-github"></i> Github</a>
                            <button class="btn btn-danger" id="btn-send-email"><i class="fa-solid fa-envelope"></i> Gmail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJECTS -->
            <div class="container" id="projects-section">
                <div class="row">

                    <div class="col-6">
                        <div class="project-holder">
                            <div class="project-image">
                                <button class="btn btn-outline-secondary">Acessar</button>
                                <button class="btn btn-outline-secondary">Repositório</button>
                            </div>
                            <div class="project-name">
                                PROJETO 1
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="project-holder">
                            <div class="project-image">
                                <button class="btn btn-outline-secondary">Acessar</button>
                                <button class="btn btn-outline-secondary">Repositório</button>
                            </div>
                            <div class="project-name">
                                PROJETO 1
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="project-holder">
                            <div class="project-image">
                                <button class="btn btn-outline-secondary">Acessar</button>
                                <button class="btn btn-outline-secondary">Repositório</button>
                            </div>
                            <div class="project-name">
                                PROJETO 1
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="project-holder">
                            <div class="project-image">
                                <button class="btn btn-outline-secondary">Acessar</button>
                                <button class="btn btn-outline-secondary">Repositório</button>
                            </div>
                            <div class="project-name">
                                PROJETO 1
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </body>
</html>