<?php
include ("_assets/_crud/conexao.php");
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
                            <span class="php-admin">
                                <?php echo "Usuario Logado: ". $_SESSION['usuarioNome'];?></span>
                        </div>
                    </div>
                </header>
                <section class="interface-adm">
                  <div class="row">
                       <div class="col">
                          <ul class="ul-frame">
                              <li><a href="_assets/_crud/sair.php">Sair</a></li>
                              <li><a href="_assets/_crud/read.php" target="frame">Visualizar Itens</a></li>
                              <li><a href="_assets/_crud/create.php" target="frame">Cadastrar Itens</a></li>
                          </ul>
                           <iframe name="frame" frameborder="0" class="frame-set"></iframe>
                        </div>
                    </div>
                </section>
                <footer class="footer-main container">
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
    </body>

    </html>
