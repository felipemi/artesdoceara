<?php
$script = $_SERVER['SCRIPT_NAME'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php
             if ($script == "/404.php") {
                echo "Artes do Ceará | Página não encontrada. Erro 404";
            }
            if ($script == "/index.php") {
                echo "Artes do Ceará | Produtos do Ceará. Porto União (SC)";
            }
            if ($script == "/aempresa.php") {
                echo "Artes do Ceará | A Empresa";
            }
            if ($script == "/produtos.php") {
                echo "Artes do Ceará | Produtos";
            }
            if ($script == "/franquia.php") {
                echo "Artes do Ceará | Franquia";
            }
            if ($script == "/contato.php") {
                echo "Artes do Ceará | Contato";
            }
            if ($script == "/confeccao.php") {
                echo "Artes do Ceará | Confecção";
            }
            if ($script == "/moda_praia.php") {
                echo "Artes do Ceará | Moda Praia";
            }
            if ($script == "/lingerie.php") {
                echo "Artes do Ceará | Lingerie";
            }
            if ($script == "/lingerie.php") {
                echo "Artes do Ceará | Lingerie";
            }
            if ($script == "/toalhas.php") {
                echo "Artes do Ceará | Toalhas";
            }
            if ($script == "/toalhinhas.php") {
                echo "Artes do Ceará | Toalhinhas";
            }
            if ($script == "/tapecaria.php") {
                echo "Artes do Ceará | Tapeçaria";
            }
            if ($script == "/jg_cama.php") {
                echo "Artes do Ceará | Tapeçaria";
            }
            if ($script == "/bolsas.php") {
                echo "Artes do Ceará | Bolsas";
            }
            if ($script == "/infantil_bebe.php") {
                echo "Artes do Ceará | Bolsas";
            }
            if ($script == "/castanhas.php") {
                echo "Artes do Ceará | Castanhas";
            }
            if ($script == "/doces.php") {
                echo "Artes do Ceará | Castanhas";
            }
            if ($script == "/acessorios.php") {
                echo "Artes do Ceará | Utilidades e Decorações";
            }
            ?>
        </title>
        <meta charset="utf-8">
        <meta name="robots" content="index">
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Artes do Ceará. Localizado na Rua Prudente de Moraes nº293, no centro de Porto União (SC). Trabalhamos com a mais completa linha de produtos do Ceará"/>
        <meta name="keywords" content="União da Vitória, Fortaleza, Região Sul, Artes Ceará, Produtos Artesanais, Ceará, Porto União, Confecção, Moda Praia, Lingerie, Toalhas, Toalhinhas, Tapeçaria, Castanhas, Castanhas de Caju, Franquia, Moda Praia, Lençóis, mapas, telefones">
        <meta name="author" content="StylusGraf. Marketing e Propaganda">
        <link rel="icon" href="images/favicon.png">
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/slider.css">
        <link href="artesceara-rss.xml" rel="alternate" type="application/rss+xml" title="RSS 2.0"/>
        <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
        <script language="javascript" type="text/javascript" src="js/superfish.js"></script>
        <script language="javascript" type="text/javascript" src="js/sForm.js"></script>
        <script language="javascript" type="text/javascript"src="js/jquery.jqtransform.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery.equalheights.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script language="javascript" type="text/javascript" src="js/tms-0.4.1.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery.ui.totop.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery-validate.js"></script>
        <script language="javascript" type="text/javascript" src="js/artesdoceara.js"></script>
        <script>
            $(window).load(function() {
                $('.slider')._TMS({
                    show: 0,
                    pauseOnHover: false,
                    prevBu: '.prev',
                    nextBu: '.next',
                    playBu: false,
                    duration: 800,
                    preset: 'random',
                    pagination: false, //'.pagination',true,'<ul></ul>'
                    pagNums: false,
                    slideshow: 8000,
                    numStatus: false,
                    banners: true,
                    waitBannerAnimation: false,
                    progressBar: false
                });
                $("#tabs").tabs();

                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <!--[if lt IE 8]>
         <div style=' clear: both; text-align:center; position: relative;'>
                                         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                                                 <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                                         </a>
                                </div>
                        <![endif]-->
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <link rel="stylesheet" media="screen" href="css/ie.css">

<![endif]-->
    </head>
    <body class="page1">

        <!--==============================header=================================-->
        <header> 
            <div class="container_12">
                <div class="grid_12"> 
                    <h1>
                        <a href="index.php" title="Artes do Ceará">
                            <img src="images/logo.png" alt="Logo Artes do Ceará" width="167"/>
                        </a>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="menu_block">
                    <nav>
                        <?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']); ?>
                        <ul class="sf-menu">
                            <li <?php
                        if ($paginaCorrente == 'index.php') {
                            echo 'class="current"';
                        }
                        ?>>
                                <a href="index.php" title="Página Inicial">Início</a>
                            </li>
                            <li <?php
                            if ($paginaCorrente == 'aempresa.php') {
                                echo 'class="current"';
                            }
                        ?>>
                                <a href="aempresa.php" title="A Empresa">A Empresa</a>
                            </li>
                            <li <?php
                            if ($paginaCorrente == 'produtos.php') {
                                echo 'class="current"';
                            }
                        ?>><a href="produtos.php" title="Produtos">Produtos</a></li>
                            <li <?php
                            if ($paginaCorrente == 'franquia.php') {
                                echo 'class="current"';
                            }
                        ?>><a href="franquia.php" title="Franquia">Franquia</a></li>
                            <li <?php
                            if ($paginaCorrente == 'contato.php') {
                                echo 'class="current"';
                            }
                        ?>><a href="contato.php" title="Contato">Contato</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </header>
