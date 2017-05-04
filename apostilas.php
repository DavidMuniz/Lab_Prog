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
    <section class="content">
              <header class="header-content">
               <div class="header-top">
                   <div class="col col-2">
                    <h1><a href="usuario.php">Web<span style="color:#E38F2A;">World</span></a></h1>
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
                                <!-- /cbp-hrsub-inner -->

                            <!-- /cbp-hrsub -->
                        </li>
                    </ul>
                </nav>

                <div class="clear"></div>
            </header>

    <div class="row">
        <div class="">
           <form action="" method="post" accept-charset="utf-8" class="form-read">
	            <label for="buscar"></label>
	            <input type="search" name="filtro" id="buscar" placeholder="Informe um nome ou categoria para filtrar ou mantenha vazio para trazer todos os dados">
	            <input type="submit" name="btn_buscar" value="Buscar">
            </form>
            <table class="table_user" cellspacing="0">
                <caption>Listagem de Apostilas</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Paginas</th>
                        <th>Categoria</th>
                        <th>Resumo</th>
                        <th>Download <span style="color:red">(opção indisponivel)</span></th>
                    </tr>
                </thead>
                <tbody>
               	<?php
                    if(isset($_POST['btn_buscar'])){
                    $busca= $_POST["filtro"];
                    $msg= "Não existe nenhuma apostila ou categoria com o nome consultado: ";
                    $sql ="select id,nome,descricao,paginas,categoria,resumo from acervo WHERE nome like '%$busca%' or categoria like'%$busca%'";
                    }else{
                    $sql="select id,nome,descricao,paginas,categoria,resumo from acervo";
                    }
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
	?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nome']?></td>
                        <td><?=$row['descricao']?></td>
                        <td><?=$row['paginas']?></td>
                        <td><?=$row['categoria']?></td>
                        <td><?=$row['resumo']?></td>
                        <td><span style="color:red">X</span></td>

                    </tr>
                <?php
                        }
                    }else{
                        echo "<tr class='msg'><td colspan='9'>$msg<span>$busca</span></td></tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
       <footer class="footer-main container footer-table">
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
