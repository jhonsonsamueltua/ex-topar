<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Galeri';
?>

<div class="container">
    <br>
    <div class="row">
        <div class="col s12 m6">
            <div class="section">
                <h3 class="header center teal-text text-lighten-3">KOMUNITAS TOPAR</h3>
                <div class="row center">
                    <p class="light">Komunitas TOPAR (Toba Parhitean Rafting) adalah sebuah komunitas yang bergerak dibidang wisata alam dan arung jeram. Komunitas ini berdiri tanggal 5 Mei 2012 yang diketuai  oleh Frengky Tampubolon. BaseCamp komunitas ini berada di desa Parhitean, Kec. Pintu Pohan Meranti, Kab. Toba. Sebagian besar dari anggota komunitas TOPAR telah tersertifikasi sebagai guide untuk Arung Jeram. Sehingga tidak diragukan lagi untuk membawa pengunjung dijalur fun maupun extreme.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="carousel carousel-slider center">
                <div class="carousel-item red white-text" href="#one!">
                <h2>First Panel</h2>
                <p class="white-text">This is your first panel</p>
                </div>
                <div class="carousel-item amber white-text" href="#two!">
                <h2>Second Panel</h2>
                <p class="white-text">This is your second panel</p>
                </div>
                <div class="carousel-item green white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
                </div>
                <div class="carousel-item blue white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
                </div>
            </div>  
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s12 m6">
            <br>
            <div class="video-container">
                <iframe width="853" height="480" src="//www.youtube.com/embed/-G8E9O0aFTY?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="section" style="padding-bottom:0px;">
                <h3 class="header center teal-text text-lighten-3">SUNGAI ASAHAN</h3>
                <div class="row center">
                    <p class="light">Sungai Asahan berhulu dari Danau Toba dan berhilir di Kota Tanjung Balai. Sungai ini memiliki panjang 150Km diantara dua Kabupaten (Kabupaten Toba dan Asahan). Sungai Asahan mendapat predikat sebagai sungai dengan jeram terbaik Tiga di dunia setelah Sungai Zembezi di Afrika dan Sungai Colorado di Amerika Serikat. Sungai ini memiliki dua jalur dengan tingkat kesulitan jeram yang berbeda yaitu extreme dan fun. Selain jeram yang baik, Sungai Asahan juga memiliki kekayaan wisata alam disepanjang jalur pengarungan. Mulai dari Batu lapis dan Goa yang terbentuk dari hasil letusan gunung Toba.</p>
                </div>
            </div>
        </div>
        <p class="light">Sungai Asahan terkenal dengan berbagai karakteristiknya, mulai dari yang tenang hingga deras. Itulah sebabnya, Dalam dua dekade terakhir, berbagai bagian sungai dieksploitasi sebagai titik rafting untuk pemula dan yang berpengalaman. Jika Anda seorang pemula yang memiliki satu atau dua pengalaman, ada rute arung jeram level 2 yang akan memanjakan mata Anda dengan tebing yang luar biasa dan aliran air di sana-sini. Bagi para Rafter yang telah advanced maupun expert, Sungai Asahan akan memberikan tantangan yang cukup untuk menjaga adrenalin tetap tinggi melalui rute level 5-6 - salah satu yang diklaim sebagai peringkat kedua dunia untuk tempat Arung Jeram Air Putih setelah Sungai Zambezi di Afrika dan Sungai Colorado yang mengalir melalui Amerika Serikat dan Meksiko.</p>
        <p class="light">Waktu terbaik untuk mengunjungi tempat arung jeram ini adalah selama September hingga Januari, ketika musim hujan melakukan kunjungan tahunan ke Indonesia dan negara-negara Asia Pasifik lainnya. Tetapi jika Anda mengunjungi selain bulan-bulan itu, Anda tidak perlu khawatir. Ketinggian air biasanya stabil sepanjang tahun dengan hanya sedikit penurunan pada aliran air selama musim kemarau. Yang terbaik adalah Anda memiliki perjalanan arung jeram yang diatur sebelumnya dari Medan karena biasanya termasuk transportasi dan akomodasi, bersama dengan perjalanan sampingan seperti kayak, bersepeda dan trekking hutan.</p>
    </div>
    <div class="row">
        <div id="map"></div>
    </div>
</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCkrzt33peJ0jT3VkxiMovcRtoacc6Dbw"></script>
    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var labels = 'P';

      function initialize() {
        var parhitean = { lat: 2.566100, lng: 99.333504 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: parhitean
        });

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
          addMarker(event.latLng, map);
        });

        // Add a marker at the center of the map.
        addMarker(parhitean, map);
      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          label: labels,
          map: map
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

