<?php

use yii\bootstrap\Html;
?>

<div class="lang">
    <ul>
        <li class="lang-item lang-item-2 lang-item-ru <?= \Yii::$app->language == 'ru' ? 'current-lang active' : null ?>">
            <?= Html::a('РУС', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'ru'])); ?>
        </li>
        <li class="lang-item lang-item-5 lang-item-uk <?= \Yii::$app->language == 'uk' ? 'current-lang active' : null ?>">
            <?= Html::a('УКР', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'uk'])); ?>
        </li>
        <li class="lang-item lang-item-9 lang-item-en <?= \Yii::$app->language == 'en' ? 'current-lang active' : null ?>">
            <?= Html::a('ENG', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'en'])); ?>
        </li>
        <li class="lang-item lang-item-13 lang-item-lt <?= \Yii::$app->language == 'lt' ? 'current-lang active' : null ?>">
            <?= Html::a('LT', array_merge(\Yii::$app->request->get(), [\Yii::$app->controller->route, 'language' => 'lt'])); ?>
        </li>
    </ul>
</div>
