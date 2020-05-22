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

  <!-- js -->
  <script src="https://kit.fontawesome.com/cb1cb22d03.js" crossorigin="anonymous"></script>
  <script async data-id="42304" src="https://cdn.widgetwhats.com/script.min.js"></script>
  <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script> -->
  <!-- GetButton.io widget -->
<!-- <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281362250734", // WhatsApp number
            call_to_action: "Chat in Whatsapp", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script> -->
<!-- /GetButton.io widget -->

<!-- Start of Async Callbell Code -->
<script>
  window.callbellSettings = {
    token: "jmVgn8nYtbzQgjxqwejVAhEP"
  };
</script>
<script>
  (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<!-- End of Async Callbell Code -->


</head>
<body>
<?php $this->beginBody() ?>
<!-- <div class="elfsight-app-14d6889e-6b76-43d2-9ae6-8f58e230ad59"></div> -->
<div class="wrap">
    <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="./index.php" class="brand-logo"><img class="logo" src='images/logo.png'></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./index.php?r=site/tentang-kami">TENTANG KAMI</a></li>
        <li><a href="./index.php?r=site/wisata">WISATA</a></li>
        <li><a href="./index.php?r=site/paket-wisata">PAKET WISATA</a></li>
        <li><a href="./index.php?r=site/souvenir">SOUVENIR</a></li>
        <li><a href="./index.php?r=site/galeri">GALERI</a></li>
        <li><a href="./index.php?r=site/blog">BLOG</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="./index.php?r=site/tentang-kami">TENTANG KAMI</a></li>
        <li><a href="./index.php?r=site/wisata">WISATA</a></li>
        <li><a href="./index.php?r=site/paket-wisata">PAKET WISATA</a></li>
        <li><a href="./index.php?r=site/souvenir">SOUVENIR</a></li>
        <li><a href="./index.php?r=site/galeri">GALERI</a></li>
        <li><a href="./index.php?r=site/blog">BLOG</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <button onclick="topFunction()" id="myBtn" title="Go to top">  <i class="small material-icons">arrow_upward</i></button>

    <!-- <div class="container"> -->
        <?= $content ?>
    <!-- </div> -->
</div>

<footer class="page-footer teal">
  <div class="container">
    <div class="row" style="margin-bottom:0px;">
      <div class="col l6 s12">
        <h5 class="white-text">Tentang Kami</h5>
        <p class="grey-text text-lighten-4">Kami TOPAR (Toba Parhitean Rafting) siap memandu anda mengarungi dan menikmati Fun Rafting & Extreme Rafting Sungai Asahan.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Kontak Kami</h5>
        <ul>
          <li style="padding: 3px;"><a class="grey-text text-lighten-3" href="#!">  <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;+6281362250734</a></li>
          <li style="padding: 3px;"><a class="grey-text text-lighten-3" href="#!">  <i class="fa fa-instagram fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;@toba_parhitean_rafting</a></li>
          <li style="padding: 3px;"><a class="grey-text text-lighten-3" href="#!">  <i class="fa fa-facebook fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;Toba Parhitean Rafting</a></li>
          <li style="padding: 3px;"><a class="grey-text text-lighten-3" href="#!">  <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;Maranti Utara, Pintu Pohan Meranti, Toba</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center" >
    © 2020 Toba Parhitean Rafting | Device <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
    </div>
  </div>
</footer>

<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>
