<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

switch(\Yii::$app->language) {
    case 'ru':
        $msg = 'Ошибка, нужно ввести номер телефона или почту обязательно!';
        break;
    case 'uk':
        $msg = 'Помилка, потрібно ввести номер телефону або пошту обов\'язково!';
        break;
    case 'en':
        $msg = 'Error, you need to enter a phone number or mail necessarily!';
        break;
    case 'lt':
        $msg = 'Klaida, būtinai turite įvesti telefono numerį ar laišką!';
        break;
        break;
}
?>
<section>
<div class="wrap">
    <div class="site-error" style="min-height: 500px">

        <h1 style="color: red"><?= $msg ?></h1>

    </div>
</div>
</section>