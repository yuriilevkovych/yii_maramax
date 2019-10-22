<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

switch(\Yii::$app->language) {
    case 'ru':
        $msg = 'Спасибо за ваше обращение, мы Вам перезвоним в ближайшее время!';
        break;
    case 'uk':
        $msg = 'Дякуємо за ваше звернення, ми Вам зателефонуємо найближчим часом!';
        break;
    case 'en':
        $msg = 'Thank you for contacting us, we will call you back soon!';
        break;
    case 'lt':
        $msg = 'Dėkojame, kad susisiekėte su mumis, netrukus jums paskambinsime!';
        break;
        break;
}

?>
<section>
<div class="wrap">
    <div class="site-success" style="min-height: 500px">

        <h1><?= $msg ?></h1> <br/> <a href="/">Главная</a>

    </div>
</div>
</section>