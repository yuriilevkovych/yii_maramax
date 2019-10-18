<?php

/* @var $this yii\web\View */

use app\components\CallbackWidget;

$this->title = 'Maramax';
?>

<section><div class="logo"><div class="top_title"></div><div class="bottom_title"></div></div>
    <div class="contacts_b">
        <div class="wrap">
            <div class="title">Contacts</div>
            <div class="cont_r">
                <div>Maxim Kiselev</div>
                <div>Sales Manager</div>
                <div>m.kysilov@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Anatoly Pavlyuk</div>
                <div>Sales Manager</div>
                <div>a.pavlyuk@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Irina Hatsanovskaya</div>
                <div>Sales Manager</div>
                <div>i.hatsanovska@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Natalia Kolesnik</div>
                <div>Sales Manager</div>
                <div>n.kolesnik@maramax.kiev.ua</div>
            </div>
            <div class="cont_r">
                <div>Irina Kudryavchenko</div>
                <div>Sales Manager</div>
                <div>i.kudryavchenko@maramax.kiev.ua</div>
            </div>
            <ul>
                <li><img src="/wp-content/uploads/2015/06/cont_1.jpg" alt="">08122, Kyiv region. Kiev Svyatoshinsky district,<br>
                    s.Shpitki Street. Hospodarske 10a</li>
                <li><img src="/wp-content/uploads/2015/06/cont_2.jpg" alt="">+38 (097) 005-20-20<br>
                    +38 (044) 276-25-25</li>
                <li><img src="/wp-content/uploads/2015/06/cont_3.jpg" alt="">office@maramax.kiev.ua</li>
            </ul>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36158.546217513875!2d30.110770315430113!3d50.412597130653126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cb797b0048db%3A0xe5df9da09313d6a2!2z0J7QntCeICLQnNCw0YDQsNC80LDQutGBIg!5e0!3m2!1sru!2sua!4v1436513686686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>
    </div>

    <div class="feed">
        <div class="wrap">
            <span class="_title">Contact us</span>

            <?= CallbackWidget::widget() ?>

        </div>
    </div>
    <div id="top">UP</div>    </section>