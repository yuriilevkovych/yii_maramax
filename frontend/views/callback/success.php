<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

?>
<section>
<div class="wrap">
    <div class="site-success">

        <h1>Спасибо за ваше обращение, мы Вам перезвоним в ближайшее время!</h1> <br/> <a href="/">Главная</a>

    </div>

    <?= \app\components\CallbackWidget::widget() ?>
</div>
</section>