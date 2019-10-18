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
                    <div class="top_title">News</div>

                    <div class="items">
                        <ul>
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
            <span class="_title">Contact us</span>
                <?= CallbackWidget::widget() ?>
        </div>
    </div>
    <div id="top">UP</div>    </section>