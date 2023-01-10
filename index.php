<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Arthur Bender - Portfolio</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <div class="navbar navbar-dark bg-dark navbar-expand-md">
            <a class="navbar-brand" href="#">Arthur Bender</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsed-content" aria-controls="navbar-collapsed-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapsed-content">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projetos</a>
                    </li>
                </ul>

                <form class="form-inline" id="navbar-language">
                    <span class="navbar-text mr-3">
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
                    <h1 class="mb-3" id="about-name">Arthur Bender</h1>
                    <h4 id="about-profession">Desenvolvedor Full-Stack</h4>

                    <button class="btn btn-lg btn-light" id="about-curriculum">Currículo</button>

                    <p class="mx-auto mb-5" id="about-text">
                        Sou um desenvolvedor full-stack formado com mais de 5 anos de experiência na área, 
                        apaixonado por tecnologia e desenvolvimento. Gosto muito de aprender e sou uma pessoa animada e positiva, 
                        facilitando o trabalho em equipe. Nos últimos anos, desenvolvi principalmente projetos utilizando Ruby on Rails, 
                        tanto na parte de frontend quanto backend, com foco na interação com os usuários.
                    </p>

                    <div class="links-row">
                        <button class="btn btn-primary">Linkedin</button>
                        <button class="btn btn-dark">Github</button>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>