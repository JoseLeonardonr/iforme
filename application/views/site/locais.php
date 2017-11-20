<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MDL-Static Website</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="<?= base_url("assets/css/material.indigo-pink.min.css")?>" />
    <link rel="stylesheet" href="assets/styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/icone.ico');?>" />
    
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                </span>
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link" href="<?php echo base_url('home');?>">Cardápio</a>
                    <a class="mdl-navigation__link is-active" href="<?php echo base_url('locais');?>">Locais importantes</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link" href="<?php echo base_url('home');?>">Cardápio</a>
                <a class="mdl-navigation__link is-active" href="<?php echo base_url('locais');?>">Locais importantes</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div id="map"></div>
            </div>
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Simple portfolio website</div>
                </div>
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
    <script src="<?= base_url("assets/js/material.min.js")?>"></script>
    <script>
      function initMap() {
        var uluru = {lat: -21.351630, lng: -46.526437};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: "Biblioteca"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.351515, lng: -46.521776},
          map: map,
          title: "Mecanização"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350988, lng: -46.525418},
          map: map,
          title: "Agroindústria"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350811, lng: -46.527041},
          map: map,
          title: "Prédio da Informática"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350802, lng: -46.526801},
          map: map,
          title: "Almoxarifado"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350477, lng: -46.527689},
          map: map,
          title: "Secretaria"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350139, lng: -46.527797},
          map: map,
          title: "Cooperativa"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.349841, lng: -46.527869},
          map: map,
          title: "Lanchonete"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350353, lng: -46.528426},
          map: map,
          title: "Prédio H"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.350915, lng: -46.528929},
          map: map,
          title: "Administração"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.348968, lng: -46.528793},
          map: map,
          title: "Quadra"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.349365, lng: -46.529465},
          map: map,
          title: "Alojamento Feminino"
        });
        var marker = new google.maps.Marker({
          position: {lat: -21.349672, lng: -46.529705},
          map: map,
          title: "Alojamento Masculino"
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsj2toBW__XjwVRIXnI-IES_DveRoEQYw&callback=initMap">
    </script>
</body>

</html>
