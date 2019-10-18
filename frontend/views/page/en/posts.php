<?php

/* @var $this yii\web\View */

use app\components\CallbackWidget;

$this->title = 'Maramax';
?>

<section><div class="logo"><div class="top_title"></div><div class="bottom_title"></div></div>

    <div class="cont_wrap">
        <div class="uslugi">
            <div class="wrap">
                <div class="title">Publishing</div>

                <div class="left_wrap publ">
                </div>

                <div class="pager">
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