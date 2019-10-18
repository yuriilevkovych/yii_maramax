<?php

/* @var $this yii\web\View */

use app\components\CallbackWidget;

$this->title = 'Maramax';
?>

<section><div class="logo"><div class="top_title"></div><div class="bottom_title"></div></div>
    <div class="contacts_b">
        <div class="wrap">
            <div class="title">контакты</div>
            <div class="title">отдела продаж</div>
            <div class="cont_l">
            </div>
            <div class="cont_r">
                <div>Максим Киселев</div>
                <div>Менеджер по продажам</div>
                <div>m.kysilov@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Анатолий Павлюк</div>
                <div>Менеджер по продажам</div>
                <div>a.pavlyuk@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Ирина Хацановская</div>
                <div>Менеджер по продажам</div>
                <div>i.hatsanovska@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Наталья Колесник</div>
                <div>Менеджер по продажам</div>
                <div>n.kolesnik@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Ирина Кудрявченко</div>
                <div>Менеджер по продажам</div>
                <div>i.kudryavchenko@maramax.kiev.ua</div>
            </div>
            <div class="title">отдела снабжения и логистики</div>
        </div>
        <div class="cont_r">
            <div>Оксана Нестерчук</div>
            <div>Менеджер по снабжению</div>
            <div>o.nesterchuk@maramax.kiev.ua</div>
        </div>
        <div class="title">Бухгалтерия +38 (044) 276-25-25</div>
        <ul>
            <li><img src="/wp-content/uploads/2015/06/cont_1.jpg" alt="">08122, Киевская обл. Киево-Святошинский р-н,<br>
                с.Шпитьки, ул. Хозяйственная, 10а</li>
            <li><img src="/wp-content/uploads/2015/06/cont_2.jpg" alt="">+38 (097) 005-20-20<br>
                +38 (044) 276-29-09</li>
            <li><img src="/wp-content/uploads/2015/06/cont_3.jpg" alt="">office@maramax.kiev.ua</li>
        </ul>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36158.546217513875!2d30.110770315430113!3d50.412597130653126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cb797b0048db%3A0xe5df9da09313d6a2!2z0J7QntCeICLQnNCw0YDQsNC80LDQutGBIg!5e0!3m2!1sru!2sua!4v1436513686686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>
    </div>

    <div class="feed">
        <div class="wrap">
            <span class="_title">Свяжитесь с нами</span>

            <?= CallbackWidget::widget() ?>

        </div>
    </div>
    <div id="top">ВВЕРХ</div>    </section>