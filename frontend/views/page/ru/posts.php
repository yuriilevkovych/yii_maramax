<?php

/* @var $this yii\web\View */

use app\components\CallbackWidget;

$this->title = 'Maramax';
?>

<section><div class="logo"><div class="top_title"></div><div class="bottom_title"></div></div>

    <div class="cont_wrap">
        <div class="uslugi">
            <div class="wrap">
                <div class="title">Публикации</div>

                <div class="left_wrap publ">
                    <ul>
                        <li>
                            <div class="link"><a href="/post/point-of-sales/">Point Of Sales, или Место продажи заменить нельзя</a></div>
                            <div class="sh_text">
                                <p>В условиях ожесточенной борьбы за потребителя все более активную роль играют POS-материалы (Point Of Sales - с англ. Дословно «место продаж»). Исследованиями доказано, что почти 60% покупателей делают с выбор непосредственно в месте совершения покупки. Именно здесь они и наталкиваются на POS-материалы - средства оформления места продаж, которые привлекают внимание клиента к изделиям и мотивируют к приобретению товара.</p>
                            </div>
                            <div class="more"><a href="/post/point-of-sales/">Подробнее</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/pos-materials/">POSтулат выбора</a></div>
                            <div class="sh_text">
                                <p>Картонные POS материалы – развивающийся сегмент
                                    О целевом предназначении POS (Point of Sales) материалов как отдельного вида рекламной продукции и о преимуществах изготовления их из картона рассказал Александр Мартыненко, генеральный директор компании Maramax</p>
                            </div>
                            <div class="more"><a href="/post/pos-materials/">Подробнее</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/doing-recl/">Изготовление рекламных напольных стоек от производителя</a></div>
                            <div class="sh_text">
                                <p>Рекламные напольные стойкиИменно реклама, в первую очередь, привлекает внимание потенциального клиента. Чем качественнее реклама, тем больше людей интересуется Вашим предложением. Рекламные напольные стойки должны своим внешним видом цеплять взгляд и направлять человека на приобретение товара или услуг.</p>
                            </div>
                            <div class="more"><a href="/post/doing-recl/">Подробнее</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/doing-packages/">Изготовление упаковки</a></div>
                            <div class="sh_text">
                                <p>Упаковка является защитным материалом и яркой рекламой любого товара. Ее роль неоценима, как при производстве, так и при сбыте продукции. Именно внешняя оболочка придает товару индивидуальный облик, позволяет выделиться из общей массы аналогичных продуктов и заявить о себе.</p>
                            </div>
                            <div class="more"><a href="/post/doing-packages/">Подробнее</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/doing-higher/">Производство упаковок</a></div>
                            <div class="sh_text">
                                <p>Для&nbsp; того чтобы успешно заявить о себе, любой товар должен иметь упаковку. Ведь именно на нее, красочную и информативную, обращает внимание каждый покупатель. А еще, с ее помощью намного легче и удобнее конкурировать на рынке. Но, только в том случае, когда упаковка качественная.</p>
                            </div>
                            <div class="more"><a href="/post/doing-higher/">Подробнее</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/pacaging-is/">Средства повышения продаж</a></div>
                            <div class="sh_text">
                                <p>Повышение уровня продаж – важнейшее стратегическое направление завоевания рыночных позиций. Маркетинговыми средствами реализации стратегических планов выступают картонные POS-материалы (POSM) и упаковка – на это положение обращают внимание специалисты ООО «Марамакс»</p>
                            </div>
                            <div class="more"><a href="/post/pacaging-is/">Подробнее</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/gofrocart-package/">Упаковка из гофрокартона</a></div>
                            <div class="sh_text">
                                <p>Сегодня сложно найти на витринах магазинов товар без упаковки. В нашем современном мире пакуют все. Тара и упаковка могут быть из стекла, пластика, полиэтилена, бумаги, картона и гофрокартона. Причем из всего перечисленного наиболее универсальной и востребованной является упаковка из гофрокартона.</p>
                            </div>
                            <div class="more"><a href="/post/gofrocart-package/">Подробнее</a></div>
                        </li>
                    </ul>
                </div>

<!--                <div class="pager">-->
<!--                    <div class="pods-pagination-paginate ">-->
<!--                        <ul class="page-numbers">-->
<!--                            <li><span class="page-numbers current">1</span></li>-->
<!--                            <li><a class="page-numbers" href="/ru/%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0%d1%86%d0%b8%d0%b8/?pg=2">2</a></li>-->
<!--                        </ul>-->
<!--                    </div>			</div>-->

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