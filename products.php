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

  <!--======================= MODAL CONTACT FORM====================-->

<div class="modal fade modal-form-sm" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Оставьте ваше сообщение:</h4>
      </div>
      <div class="modal-body">
        <form action="">
           <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 no-padding">
           <div class="form-group col-sm-6">
               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding" for="#name">Имя</label>
               <input class="col-lg-12 col-md-10 col-sm-10 col-xs-12" id="email" type="text">
           </div>

           <div class="form-group col-sm-6">
               <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding" for="#email">Email</label>
               <input class="col-lg-12 col-md-10 col-sm-10 col-xs-12" id="email" type="text">
           </div>
           </div>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="form-group">
                <label for="#user-message">что вы нам хотите сказать?</label>
               <textarea  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " name="" id="user-message" cols="30" rows="6"></textarea>
             </div>
           </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default col-sm-3 col-xs-4" data-dismiss="modal">закрыть</button>
        <button type="submit" class="btn blue-bg col-sm-8 col-xs-7">отправить</button>
      </div>
    </div>
  </div>
</div>

  <!--==================== END MODAL CONTACT FORM====================-->

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
                               <li class=""><a href="index.php">Главная</a></li>
                               <li><a href="about-us.php">О нас</a></li>
                               <li class="active"><a href="products.html">Продукты</a></li>
                               <li><a href="rent.php">Аренда 1С</a></li>
                               <li><a href="#">Услуги</a></li>
                               <li><a href="#">Прайс лист</a></li>
                               <li><a href="#">Контакты</a></li>
                           </ul>
                       </div>
                   </nav>
               </div>
           </div>
       </div>
   </header>

   <article class="navigation blue-bg products-content">
       <div class="container-fluid">
           <div class="row">
               <div class="container">
                   <ul class="category-list products">
                       <li class="col-sm-3 col-xs-6 active">
                       <a href="/page/products1c.html">
                       продукты 1С
                       </a>
                       </li>
                       <li class="col-sm-4 col-xs-6">
                       <a href="/page/otherproducts.html">
                       продукты других производителей
                       </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </article>
    <section class="content-post">
       <div class="container-fluid">
           <div class="row">
               <div class="container no-padding">
                   <div class="main-content">



                   </div>
               </div>
           </div>
       </div>
   </section>


    <section>
          <div class="container-fluid">
           <div class="row">
               <div class="contacts">
                   <div class="container">
                       <p class="title-white title">контакты</p>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                              <p class="for-user-text">
                                  Возникли вопросы или хотите сделать заказ?
                                  <br> Свяжитесь  с нашим менеджером по продажам
                               </p>
                               <ul class="for-user-info text-white">
                                   <li>Луцик Виолета</li>
                                   <li>Менеджер</li>
                                   <li>Ул. Ion Creanga 6V,</li>
                                   <li>+373 22 870 207</li>
                                   <li><a class="text-white" href="">1c@bts.md</a></li>
                               </ul>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

                             <div class="form-group">

                                <input class="col-lg-4 col-md-5 col-sm-5 col-xs-12 submit-btn" data-toggle="modal" type="button" data-target=".modal-form-sm" value="ЗАЯВКА">

                             </div>
                           </div>
                   </div>
               </div>
           </div>
       </div>
       </section>

   <footer>

   </footer>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="style/plugins/bootstrap/bootstrap.min.js"></script>
<script src="style/plugins/slick/slick.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>






<!--
(header>(.container-fluid>.row>.container>nav.top-nav))+(section>.slick-slider)+(article.navigation.blue-bg>.container-fluid>.row>.container>p.title{мы предлагаем}+ul.adds)+(section>.container-fluid>.row>.container>.main-content>p.title{направление «1С»})+(article.our-clients>.container-fluid>.row>.container>p.title{наши клиенты})+(section>.container-fluid>.row>.contacts>.container>p.title{контакты}+form)
-->
