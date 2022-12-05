<?php
if(isset($_post['submit']))
{
    //print_r($_post['nome']);
    //print_r($_post['email']);
    //print_r($_post['telefone']);
    include_once('config.php');

    $nome = $_post['nome'];
    $email = $_post['email'];
    $telefone =  $_post['telefone'];
    $sexo = $_post['genero'];
    $datanasc = $_post['data_nascimento'];
    $cidade = $_post['cidade'];
    $estado = $_post['estado'];
    $endereco = $_post['endereco'];
    
    $result = mysqli_querry($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,datanasc,cidade,estado,endereco)
    VALUES('$nome','$email','$telefone','$sexo','$datanasc','$cidade','$estado','$endereco')");
}
?> 

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> 
    <title>Pedro Barbieri | Portifólio</title>
</head>

<body>
    <!-- # HEADER # -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div>
                <a href="#" class="nav__logo">Pedro</a>
            </div>
            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Inicio</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Sobre</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#works" class="nav__link">Projetos</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contato</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- # HOME # -->
    <main class="l-main">
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <div class="home__img">
                        <img src="/assets/images/me_square.jpg" alt="">
                    </div>
                    <h1 class="home__title">Pedro Barbieri</h1>
                    <span class="home__profession">Programming Beginner</span>
                    <div class="home__social">
                        <a onclick="github__()" class="home__social-link"><i class='bx bxl-github'></i></a>
                        <a onclick="linkedin__()" class="home__social-link"><i class='bx bxl-linkedin'></i></a>
                    </div>
                    <!-- <a download="" href="" class="button home__button">Download Resume</a> -->
                    <span class="home__arrow"><i class='bx bx-chevrons-down'></i></span>
                </div>
            </div>
        </section>
    </main>
    <!-- # ABOUT # -->
    <section class="about section" id="about">
        <h2 class="section-title">Sobre Mim</h2>
        <div class="about__container">
            <div class="about__data">
                <p class="about__description">Sou um estudante de engenharia de computação, me esforço para ser dev um dia!.
                    Desde muito jovem deslumbrado em tecnologia, atualmente estou estudando python em um curso da udemy!
                    </p>
                <img src="/assets/images/me_square.jpg" alt="" class="about__img">
            </div>
            <div class="about__information">
                <h3 class="about__information-title">Informações</h3>
                <div class="about__information-data">
                    <i class='bx bx-user about__information-icon'></i>
                    <span>Pedro &eacute; Barbieri</span>
                </div>
                <div class="about__information-data">
                    <i class='bx bxl-whatsapp about__information-icon'></i>
                    <span>+55 17 99612 2793</span>
                </div>
                <div class="about__information-data">
                    <i class='bx bxl-instagram about__information-icon'></i>
                    <span>@pedrozbm</span>
                </div>
                <div class="about__information-data">
                    <i class='bx bx-envelope about__information-icon'></i>
                    <span>pedrohsb04@gmail.com</span>
                </div>
            </div>
        </div>
    </section>
    <!-- # SKILLS # -->
    <section class="skills section" id="skills">
        <h2 class="section-title">Skills</h2>
        <div class="skills__container bd-grid">
            <div class="skills__content">
                <h3 class="skills_subtitle">Frontend</h3>
                <div class="skills__data">
                    <span class="skills__name">Html/Css</span>
                    <span class="skills__percentage">55%</span>
                    <span class="skills__bar skills__html"></span>
                </div>
                <div class="skills__data">
                    <span class="skills__name">Javascript</span>
                    <span class="skills__percentage">72%</span>
                    <span class="skills__bar skills__js"></span>
                </div>
            </div>
            <div class="skills__content">
                <h3 class="skills_subtitle">Backend</h3>
                <div class="skills__data">
                    <span class="skills__name">Php</span>
                    <span class="skills__percentage">30%</span>
                    <span class="skills__bar skills__php"></span>
                </div>
                <div class="skills__data">
                    <span class="skills__name">Node JS</span>
                    <span class="skills__percentage">70%</span>
                    <span class="skills__bar skills__node"></span>
                </div>
                <div class="skills__data">
                    <span class="skills__name">Python</span>
                    <span class="skills__percentage">40%</span>
                    <span class="skills__bar skills__python"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- # WORKS # -->
    <section class="works section" id="works">
        <h2 class="section-title">Trabalhos Recentes</h2>
        <div class="works__container bd-grid">
            <div class="works__img">
                <img src="assets/images/phishing-facebook_icon.png" alt="">
                <div class="works__data">
                    <a onclick="phishing_facebook__()" class="works__link"><i class='bx bx-link-alt'></i></a>
                    <span class="works__title">Phishing Facebook</span>
                </div>
            </div>
            <div class="works__img">
                <img src="assets/images/api-discord-bot_json.png" alt="">
                <div class="works__data">
                    <a onclick="bot_api_status_discord__()" class="works__link"><i class='bx bx-link-alt'></i></a>
                    <span class="works__title">Bot Api Status Discord</span>
                </div>
            </div>
        </div>
    </section>
    <!-- # CONTACT # -->

<body>
        <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Contate-me!</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

    <section class="contact section" id="contact">
        <h2 class="section-title"></h2>
        <h2 class="espaco">
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnandz
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        ada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        ada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        ada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand
        nada nada nadan nadan dnand

        </h2>
       
        <div class="contact__info">
            <h3 class="contact__subtitle">Email</h3>
            <span class="contact__text">pedrohsb04@gmail.com</span>
        </div>
        <div class="contact__info">
            <h3 class="contact__subtitle">Telegram</h3>
            <span class="contact__text">@pedrozbm</span>
        </div>
        <div class="contact__info">
            <h3 class="contact__subtitle">WhatsApp</h3>
            <span class="contact__text">17 99612 2793</span>
        </div>
    </section>
    <!-- # FOOTER # -->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <h1 class="footer__title">Pedro</h1>
            <p class="footer_description">Eu sou Pedro e esse é meu Portifólio, consulte-me aqui.</p>
            <div class="footer__social">
                <a onclick="instagram__()" class="footer__link"><i class='bx bxl-instagram' ></i></a>
                <a onclick="twitter__()" class="footer__link"><i class='bx bxl-twitter' ></i></a>
                <a onclick="discord__()" class="footer__link"><i class='bx bxl-discord-alt'></i></a>
            </div>
            <p class="footer__copy">©isso eh tudo pessoal - 2021</p>
        </div>
    </footer>
    <!-- # FILE JS # -->
    <script src="./assets/js/index.js"></script>
</body>

</html>
