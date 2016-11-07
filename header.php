<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/css/reset.css">
    <link rel="stylesheet" href="style/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style/plugins/animate.css">
    <link rel="stylesheet" href="style/plugins/slick/slick.css">
    <link rel="stylesheet" href="style/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="style/css/main.css" media="all">
    <link rel="stylesheet" href="style/less/media.css" media="all and (max-width: 1024px)">
</head>
<body>

   <header>
       <div class="container-fluid">
           <div class="row">
               <div class="container no-padding">
                   <nav class="top-nav navbar">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu-collapse" aria-expanded="false">
                           <img src="images/menu.svg" alt="">
                          </button>
                          <a class="navbar-brand col-lg-6 col-md-6 col-sm-6" href="#"><img id="bts-logo" src="images/logo-BTS.png" alt="" class="logo"></a>
                          <a class="navbar-brand col-lg-5 col-md-6 col-sm-6" href="#"><img id="ones-logo" src="images/logo-1c.png" alt="" class="logo"></a>
                      </div>


                       <div class="col-lg-8 collapse navbar-collapse" id="top-menu-collapse">
                           <ul class="nav navbar-nav top-nav">
                               <li <?php if(!isset($_GET['view'])){ print 'class="active"';}?>><a href="index.php">Главная</a></li>
                               <li <?php if(isset($_GET['view'])&& ($_GET['view']  == 'about-us')){ echo 'class="active"';}?>><a href="?view=about-us">О нас</a></li>
                               <li <?php if(isset($_GET['view'])&& ($_GET['view']  == 'products')){ echo 'class="active"';}?>><a href="?view=products">Продукты</a></li>
                               <li <?php if(isset($_GET['view'])&& ($_GET['view']  == 'rent')){ echo 'class="active"';}?>><a href="?view=rent">Аренда 1С</a></li>
                               <li <?php if(isset($_GET['view'])&& ($_GET['view']  == 'services')){ echo 'class="active"';}?>><a href="?view=services">Услуги</a></li>
                               <li <?php if(isset($_GET['view'])&& ($_GET['view']  == 'price')){ echo 'class="active"';}?>><a href="?view=price">Прайс лист</a></li>
                               <li><a href="#">Контакты</a></li>
                           </ul>
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </header>