<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Toba Parhitean Rafting</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="logo" src='images/logo.jpeg'></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Wisata</a></li>
        <li><a href="#">Paket Wisata</a></li>
        <li><a href="#">Souvenir</a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">Blog</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Wisata</a></li>
        <li><a href="#">Paket Wisata</a></li>
        <li><a href="#">Souvenir</a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

    <!-- <div class="container"> -->
        <?= $content ?>
    <!-- </div> -->
</div>

<footer class="page-footer teal">
<div class="container">
    <div class="row">
    <div class="col l6 s12">
        <h5 class="white-text">Company Bio</h5>
        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


    </div>
    <div class="col l3 s12">
        <h5 class="white-text">Settings</h5>
        <ul>
        <li><a class="white-text" href="#!">Link 1</a></li>
        <li><a class="white-text" href="#!">Link 2</a></li>
        <li><a class="white-text" href="#!">Link 3</a></li>
        <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
    </div>
    <div class="col l3 s12">
        <h5 class="white-text">Connect</h5>
        <ul>
        <li><a class="white-text" href="#!">Link 1</a></li>
        <li><a class="white-text" href="#!">Link 2</a></li>
        <li><a class="white-text" href="#!">Link 3</a></li>
        <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
    </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container">
    Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
    </div>
</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
