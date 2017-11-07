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
                    <a class="mdl-navigation__link is-active" href="<?php echo base_url('home');?>">Cardápio</a>
                    <a class="mdl-navigation__link" href="<?php echo base_url('locais');?>">Locais importantes</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="<?php echo base_url('home');?>">Cardápio</a>
                <a class="mdl-navigation__link" href="<?php echo base_url('locais');?>">Locais importantes</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div class="mdl-cell mdl-card mdl-cell--12-col-tablet mdl-shadow--4dp portfolio-card">
                    <div>
                        <h3 class="tituloCardapio">Ticket</h3>
                    </div>
                    <div class="mdl-card__supporting-text divItensCardapio">
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">schedule</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                Horário atendimento:<br>
                                Seg a Sex das 8:00 ao 12:00 e 13:30 as 18:00<br>
                                Sábado e domingo das 8:00 ao 12:00
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                Professor: R$ 15,00
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                Visitante: R$ 3,50
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                Estudante: R$ 1,50
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                Terceirizado: R$ 0,25
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div>
                        <h3 class="tituloCardapio">Almoço</h3>
                        <h3 class="subtituloCardapio">31/10/2017</h3>
                    </div>
                    <div class="mdl-card__supporting-text divItensCardapio">
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">warning</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                Cardápio não disponível
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div>
                        <h3 class="tituloCardapio">Jantar</h3>
                        <h3 class="subtituloCardapio">31/10/2017</h3>
                    </div>
                    <div class="mdl-card__supporting-text divItensCardapio">
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">restaurant</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                fricassê de frango/tomate recheado pts
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">restaurant</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                fricassê de frango/tomate recheado pts
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">restaurant</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                fricassê de frango/tomate recheado pts
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">restaurant</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                fricassê de frango/tomate recheado pts
                            </div>
                        </div>
                        <div class="mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--12dp linhaCardapio">
                            <div class="mdl-cell mdl-cell--2-col  mdl-cell--12-col-tablet">
                                <i class="material-icons">restaurant</i>
                            </div>
                            <div class="mdl-cell mdl-cell--10-col">
                                fricassê de frango/tomate recheado pts
                            </div>
                        </div>
                    </div>
                </div>
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
</body>

</html>
