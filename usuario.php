<?php
include("_assets/_crud/conexao.php");
include("_assets/_crud/protect.php");
protect();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content=" ... ">
    <title>Web World</title>
    <!--[if IE]>
        <link rel="shortcut icon" href="_assets/_img/favicon.ico">
    <![endif]-->
    <link rel="icon" href="_assets/_img/favicon.ico">
    <link rel="stylesheet" href="_assets/_css/style.css">
    <link rel="stylesheet" href="_assets/_css/fonts.css">

    <!--    menu-->
    <link rel="stylesheet" type="text/css" href="_assets/_css/menu.css" />
<!--    <script src="_assets/_js/modernizr.custom.js"></script>-->
    <!--    menu-->

    <link rel="stylesheet" href="_assets/_css/animate.css">
    <script src="_assets/_js/wow.min.js"></script>


</head>

<body>
    <main>
        <section class="content">
            <header class="header-content">
               <div class="header-top">
                   <div class="col col-2">
                    <h1>Web<span style="color:#E38F2A;">World</span></h1>
                    </div>
                    <div class="col col-2">
                    <ul class="z-group main-nav">
                     <li><a href="_assets/_crud/sair.php">Sair</a></li>
                      <span class="user-login">
                                <?php echo "Bem Vindo: ". $_SESSION['usuarioNome'];?></span>
                        <li class="iconicstroke-key-stroke cd-signin" title="Login"></li>
                        <li class="zocial-facebook" title="Acesse nosso pagina no facebook !"></li>
                        <li class="zocial-twitter" title="Nosso Twitter #WebWorld"></li>
                        <li class="zocial-linkedin" title="Verifique nosso perfil profissional !"></li>
                    </ul>
                    </div>
                </div>
                <nav id="cbp-hrmenu" class="menu">
                    <ul>
                        <li>
                            <a href="#" class="first">Design</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner">
                                    <div>
                                        <h4>Backgrounds</h4>
                                        <ul>
                                            <li><a href="404error.php">Abstratos</a></li>
                                            <li><a href="404error.php">Pessoas</a></li>
                                            <li><a href="404error.php">Paisagens</a></li>
                                            <li><a href="404error.php">Tecnologia</a></li>
                                            <li><a href="404error.php">Ilustrações</a></li>
                                            <li><a href="404error.php">Esportes</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>PSD - Imagens</h4>
                                        <ul>
                                            <li><a href="404error.php">App design</a></li>
                                            <li><a href="404error.php">Icones</a></li>
                                            <li><a href="404error.php">Mockups</a></li>
                                            <li><a href="404error.php">UI kits</a></li>
                                            <li><a href="404error.php">Website Templates</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>AI - Vetores</h4>
                                        <ul>
                                            <li><a href="404error.php">Minimalistas</a></li>
                                            <li><a href="404error.php">Midias Sociais</a></li>
                                            <li><a href="404error.php">Variados</a></li>
                                        </ul>
                                        <h4>Fontes</h4>
                                        <ul>
                                            <li><a href="404error.php">Serifadas e Não Serifadas</a></li>
                                            <li><a href="404error.php">Especiais</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /cbp-hrsub-inner -->
                            </div>
                            <!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#" class="first">Apostilas - E-books</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner">
                                    <div>
                                        <h4>Variadas</h4>
                                        <ul>
                                            <li><a href="apostilas.php" ><img src="_assets/_img/apostilas_icon/books.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>Web</h4>
                                       <ul>
                                            <li><img src="_assets/_img/apostilas_icon/web.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>Redes</h4>
                                        <ul>
                                            <li><img src="_assets/_img/apostilas_icon/redes.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>Office</h4>
                                       <ul>
                                            <li><img src="_assets/_img/apostilas_icon/office.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>Programação</h4>
                                       <ul>
                                            <li><img src="_assets/_img/apostilas_icon/code.png" alt=""></li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- /cbp-hrsub-inner -->
                            </div>
                            <!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#" class="first">Sobre nós</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner">
                                    <div>
                                        <h4>Web World</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem nihil aliquam debitis ipsa, sapiente, nobis provident, fugit deleniti odio non officiis molestiae ut unde dicta sit temporibus iure sed architecto.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore optio perferendis, adipisci sunt voluptatibus dolorum cumque laudantium quisquam aliquam quam aspernatur. Eligendi doloribus molestias esse nobis in, enim voluptatum non!</p>
                                    </div>
                                </div>
                                <!-- /cbp-hrsub-inner -->
                            </div>
                            <!-- /cbp-hrsub -->
                        </li>
                        <li>
                            <a href="#" class="first">Contato</a>
                            <div class="cbp-hrsub">
                                <div class="cbp-hrsub-inner">
                                    <div>
                                        <h4>Web World</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cupiditate dolore a recusandae voluptatem repellendus cumque sint nisi nulla reprehenderit corporis accusamus expedita possimus, debitis explicabo, quaerat minus. Eaque, magni.</p>
                                        <address class="contact-address">
                                            <span class="iconicstroke-map-pin-alt"><p>Ribeirão Preto,SP</p></span>
                                            <span class="iconicstroke-mail"><p>email@email.com</p></span>
                                            <span class="fontawesome-phone"><p>890-09880-4590</p></span>
                                        </address>
                                    </div>
                                    <div>
                                       <h4>Localização</h4>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4271.443281103823!2d-77.85998724601282!3d40.79793917682184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89cea8a05cb1cb2d%3A0x31712a4c30503692!2sInferno!5e0!3m2!1sen!2sbr!4v1473780987241" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- /cbp-hrsub-inner -->
                            </div>
                            <!-- /cbp-hrsub -->
                        </li>
                    </ul>
                </nav>
                <div class="search">
                    <label for="search" class="iconicstroke-magnifying-glass"></label>
                    <input type="search" placeholder="Procurar por algo aqui !" id="search" class="input-search">
                </div>
                <div class="clear"></div>
            </header>
            <!--            LOGIN-->
            <div class="cd-user-modal">
                <div class="cd-user-modal-container">
                    <ul class="cd-switcher">
                        <li><a href="#0">Login</a></li>
                        <li><a href="#0">Nova Conta</a></li>
                    </ul>
                    <div id="cd-login">
                        <!-- log in form -->
                        <form class="cd-form" action="_assets/_crud/valida.php" method="post">
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signin-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail" name="email">
                            </p>
                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signin-password">Senha</label>
                                <input class="full-width has-padding has-border" id="signin-password" type="password" placeholder="Senha" name="senha">
                                <a href="#0" class="hide-password">Mostrar</a>
                            </p>
                            <p class="fieldset">
                                <input type="checkbox" id="remember-me" checked>
                                <label for="remember-me">Lembrar</label>
                            </p>
                            <p class="fieldset">
                                <input class="full-width" type="submit" value="Login" name="login">
                            </p>
                        </form>
                        <p class="cd-form-bottom-message"><a href="#0">Esqueceu sua senha ?</a></p>
                    </div>
                    <div id="cd-signup">
                        <form class="cd-form" action="_assets/_crud/userCreate.php" method="post">
                            <p class="fieldset">
                                <label class="image-replace cd-username" for="signup-username">Usuario</label>
                                <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Nome de Usuario" name="nome">
                            </p>
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signup-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
                            </p>
                            <p class="fieldset">
                                <label class="image-replace cd-password" for="signup-password">Senha</label>
                                <input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="Senha" name="senha">
                                <a href="#0" class="hide-password">Ocultar</a>
                            </p>
                            <p class="fieldset">
                                <input type="checkbox" id="accept-terms">
                                <label for="accept-terms">Eu condordo com os <a href="#0">Termos</a></label>
                            </p>
                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" name="btn_submit_cadastrar" value="Criar Conta">
                            </p>
                        </form>
                    </div>
                    <div id="cd-reset-password">
                        <p class="cd-form-message">Esqueceu sua senha ? Por favor informe seu email, voce recebera um link para informar uma nova senha.</p>
                        <form class="cd-form">
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                <span class="cd-error-message">Informe seu email</span>
                            </p>
                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Resetar Senha">
                            </p>
                        </form>
                        <p class="cd-form-bottom-message"><a href="#0">Voltar para Login</a></p>
                    </div>
                    <a href="#0" class="cd-close-form">Fechar</a>
                </div>
                <!-- cd-user-modal-container -->
            </div>
            <!-- cd-user-modal -->
            <!-- LOGIN-->
            <!-- /header-->
            <section class="interface">
                <div class="chamada">
                    <div class="container-chamada">
                        <h1>Bem Vindo !</h1>
                        <p>Temos o que á de melhor em conteudo voltado para web e informatica em geral, E-books e apostilas, todo o material direcionado a desenvolvedores e estudantes.
                        </p>
                        <p>Cadastre-se e disponha de nosso material !</p>
                        <a href="404error.php" class="btn">Saiba Mais</a>
                    </div>
                    <h1>Web<span style="color:#E38F2A;">World</span></h1>
                </div>
                <section class="control-nav">
                    <header class="header-control-nav">
                        <h1>Tudo o que há de<span class="strong">Melhor</span>para desenvolvedores</h1>
                        <p> A Web World tem hoje um acervo com mais de 1000 apostilas e e-books para download em nosso site. Alem disso contamos com uma coletanea de Imagens como, templates em PSD, imagens já vetorizadas que podem ser usadas para varios afins, Scripts prontos e muito mais...</p>
                    </header>
                    <section class="wow fadeInLeft" data-wow-delay="0.1s">
                        <article class="opt1">
                            <a href="404error.php" class="desktop"><span class="fontawesome-desktop" title="Veja nossa galeria de portifolios !"></span></a>
                            <h1>Portifolios</h1>
                            <p>De varias formas e tamanhos, voce tera acesso a um enorme banco de imagens com portifolios criados por diversos Designers.</p>
                        </article>
                    </section>
                    <article class="opt2">
                        <a href="404error.php" class="edit"><span class="fontawesome-edit" title="Um acervo com os mais variados tipos de scripts !"></span></a>
                        <h1>Scripts</h1>
                        <p>Navegue pelas seções e encontre o Script que procura. São milhares de códigos sobre Chats, Calendários, Contadores, Enquetes, Fórums, Sistemas de Banners, Sistemas de Buscas, etc.</p>
                    </article>
                    <article class="opt3">
                        <a href="404error.php"  class="picture"><span class="fontawesome-picture" title="Banco de imagens que auxiliara no seu Design !"></span></a>
                        <h1>Imagens</h1>
                        <p>Vetores, Icones, PSD'S, Wallpapers... Um grande acervo de imagens para designs, e desenvolvedores Front-end </p>
                    </article>
                    <div class="clear"></div>
                </section>
                <section class="highlights-gallery container">
                    <header class="header-highlights-gallery">
                        <h1>E-books em Destaque</h1>
                        <hr>
                    </header>
                    <div class="row">
                        <section class="highlights">
                            <img src="_assets/_img/photoshop.png">
                            <article>
                                <h1>Photoshop CC</h1>
                                <p>
                                    Editor profissional de imagens bidimencionais e vetoriais ...
                                </p>
                                <a href="404error.php" class="bt">Saiba mais</a>
                            </article>
                        </section>
                        <section class="highlights">
                            <img src="_assets/_img/nodejs.png">
                            <article>
                                <h1>Node.js</h1>
                                <p>
                                    Interpretador de Codigo Javascript - Server side...
                                </p>
                                <a href="404error.php" class="bt">Saiba mais</a>
                            </article>
                        </section>
                        <section class="highlights">
                            <img src="_assets/_img/autocad.png">
                            <article>
                                <h1>AutoCad</h1>
                                <p>
                                    Criação de desenhos tecnicos e tridimencionais ...
                                </p>
                                <a href="404error.php" class="bt">Saiba mais</a>
                            </article>
                        </section>
                    </div>
                </section>
            </section>
            <footer class="footer-main container">
                <div class="row">
                    <section class="popular-post col col-3">
                        <h1>Ultimas Postagens</h1>
                        <nav class="nav-post">
                            <ul>
                                <li>
                                    <a href="">
                                        <p>Lorem Impsum is simply dummy text of the printing</p>
                                        <p></p>
                                        <span class="iconicstroke-clock"></span>
                                        <time datetime="<?php echo date('Y-m-d');?>">
                                            <?php echo date('d/m/Y à\s H:i\h\s');?>
                                        </time>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>Lorem Impsum is simply dummy text of the printing</p>
                                        <p></p>
                                        <span class="iconicstroke-clock"></span>
                                        <time datetime="<?php echo date('Y-m-d');?>">
                                            <?php echo date('d/m/Y à\s H:i\h\s');?>
                                        </time>
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a href="">
                                        <p>Lorem Impsum is simply dummy text of the printing</p>
                                        <p></p>
                                        <span class="iconicstroke-clock"></span>
                                        <time datetime="<?php echo date('Y-m-d');?>">
                                            <?php echo date('d/m/Y à\s H:i\h\s');?>
                                        </time>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <p>Lorem Impsum is simply dummy text of the printing</p>
                                        <p></p>
                                        <span class="iconicstroke-clock"></span>
                                        <time datetime="<?php echo date('Y-m-d');?>">
                                            <?php echo date('d/m/Y à\s H:i\h\s');?>
                                        </time>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                    <section class="about-us col col-3">
                        <h1>Um pouco sobre nós</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem nihil aliquam debitis ipsa, sapiente, nobis provident, fugit deleniti odio non officiis molestiae ut unde dicta sit temporibus iure sed architecto.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore optio perferendis, adipisci sunt voluptatibus dolorum cumque laudantium quisquam aliquam quam aspernatur. Eligendi doloribus molestias esse nobis in, enim voluptatum non!</p>
                    </section>
                    <section class="contact col col-3">
                        <h1>Entre em Contato</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cupiditate dolore a recusandae voluptatem repellendus cumque sint nisi nulla reprehenderit corporis accusamus expedita possimus, debitis explicabo, quaerat minus. Eaque, magni.</p>
                        <address class="contact-address">
                            <span class="iconicstroke-map-pin-alt"><p>Ribeirão Preto,SP</p></span>
                           <span class="iconicstroke-mail"><p>email@email.com</p></span>
                           <span class="fontawesome-phone"><p>890-09880-4590</p></span>
                        </address>
                    </section>
                </div>
                <section class="footer-bottom">
                    <p>&copy; 2016 - Web world. Todos os direitos reservados - É nois que avua bruxão - :)</p>
                    <ul class="social-footer">
                        <li class="zocial-facebook" title="Acesse nosso pagina no facebook !"></li>
                        <li class="zocial-twitter" title="Nosso Twitter #WebWorld"></li>
                        <li class="zocial-linkedin" title="Verifique nosso perfil profissional !"></li>
                    </ul>
                </section>
            </footer>
        </section>
    </main>

    <!--    Menu Horizontal   e    Login Modal-->
    <script>
        if (!window.jQuery) document.write('<script src="_assets/_js/jquery-3.1.js"><\/script>');
    </script>

    <script src="_assets/_js/function.js"></script>

    <script>
        $(function (){
            menuHorizontal.init();
        });
    </script>
    <!--    Menu Horizontal   e    Login Modal-->
</body>

</html>
