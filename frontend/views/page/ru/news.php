<?php

/* @var $this yii\web\View */

use app\components\CallbackWidget;

$this->title = 'Maramax';
?>

<section><div class="logo"><div class="top_title"></div><div class="bottom_title"></div></div>
    <div class="cont_wrap">

        <div class="news">
            <div class="wrap">
                <div class="wrap_1069">
                    <div class="top_title">Новости</div>

                    <div class="items">
                        <ul>
                            <li>
                                <div class="img_w">
                                    <a href="http://maramax.kiev.ua/ru/2015/06/29/%d0%ba%d0%be%d0%bc%d0%bf%d0%b0%d0%bd%d0%b8%d1%8f-%d0%bc%d0%b0%d1%80%d0%b0%d0%bc%d0%b0%d0%ba%d1%81-%d0%b2%d0%be%d1%88%d0%bb%d0%b0-%d0%b2-%d0%bf%d0%be%d0%bb%d1%8c%d1%81%d0%ba%d0%be-%d1%83%d0%ba/">
                                        <div class="date">
                                            <span>29</span>
                                            <p>Июнь</p>
                                        </div>
                                        <div class="img" style="background-image: url('/img/2015/06/izba.jpg');"></div>
                                    </a>
                                </div>
                                <div class="text_w">
                                    <div class="title"><a href="http://maramax.kiev.ua/ru/2015/06/29/%d0%ba%d0%be%d0%bc%d0%bf%d0%b0%d0%bd%d0%b8%d1%8f-%d0%bc%d0%b0%d1%80%d0%b0%d0%bc%d0%b0%d0%ba%d1%81-%d0%b2%d0%be%d1%88%d0%bb%d0%b0-%d0%b2-%d0%bf%d0%be%d0%bb%d1%8c%d1%81%d0%ba%d0%be-%d1%83%d0%ba/">Компания МАРАМАКС вступила в Польско —Украинскую Хозяйственную Палату</a></div>
                                    <div class="text"><p>Польсько-Українська Господарча Палата — організація, яка об’єднує польські та українські суб’єкти господарської діяльності, що зацікавлені співробітництвом, а також виробничою і науково-технічною діяльністю. Палата надає допомогу в кооперації фірм, презентації суб’єктів господарської діяльності обох держав.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="pager">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="feed">
        <div class="wrap">
            <span class="_title">Свяжитесь с нами</span>

            <?= CallbackWidget::widget() ?>

        </div>
    </div>
    <div id="top">ВВЕРХ</div>    </section>