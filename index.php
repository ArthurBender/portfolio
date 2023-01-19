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
        <!-- NAVBAR -->
        <div class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
            <a class="navbar-brand" href="#">Arthur Bender</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsed-content" aria-controls="navbar-collapsed-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapsed-content">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects-section">Projetos</a>
                    </li>
                </ul>

                <form class="form-inline" id="navbar-language">
                    <span class="navbar-text mr-3" id="language-select-text">
                        Idioma / Language
                    </span>
                    <select class="custom-select" name="language-select" id="language-select">
                        <option value="portuguese">Português</option>
                        <option value="english">English</option>
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
                        <h4 id="about-profession">Desenvolvedor Full-Stack</h4>
    
                        <a href="assets/curriculo.pdf" target="_blank" class="btn btn-lg btn-light" id="about-curriculum"><i class="fa-solid fa-download"></i> Currículo</a>
    
                        <p class="mx-auto" id="about-text">
                            Sou um desenvolvedor full-stack formado com mais de 5 anos de experiência na área, 
                            apaixonado por tecnologia e desenvolvimento. Gosto muito de aprender e sou uma pessoa animada e positiva, 
                            facilitando o trabalho em equipe. Nos últimos anos, desenvolvi principalmente projetos utilizando Ruby on Rails, 
                            tanto na parte de frontend quanto backend, com foco na interação com os usuários.
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