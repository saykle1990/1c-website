<?php include_once 'header.php'?>


<?php
$view = empty($_GET['view'])? 'main.php' : $_GET['view'].'.php';
?>

<?php include $view?>

<?php include_once 'footer.php'?>







<!--
(header>(.container-fluid>.row>.container>nav.top-nav))+(section>.slick-slider)+(article.navigation.blue-bg>.container-fluid>.row>.container>p.title{мы предлагаем}+ul.adds)+(section>.container-fluid>.row>.container>.main-content>p.title{направление «1С»})+(article.our-clients>.container-fluid>.row>.container>p.title{наши клиенты})+(section>.container-fluid>.row>.contacts>.container>p.title{контакты}+form)
-->
