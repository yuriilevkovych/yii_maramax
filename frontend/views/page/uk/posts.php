<?php

/* @var $this yii\web\View */

use app\components\CallbackWidget;

$this->title = 'Maramax';
?>

<section><div class="logo"><div class="top_title"></div><div class="bottom_title"></div></div>

    <div class="cont_wrap">
        <div class="uslugi">
            <div class="wrap">
                <div class="title">Публікації</div>

                <div class="left_wrap publ">
                    <ul>
                        <li>
                            <div class="link"><a href="/post/point-of-sales/">Point Of Sales, або Місце продажу замінити не можна</a></div>
                            <div class="sh_text">
                                <p>В умовах запеклої боротьби за споживача дедалі активнішу роль відіграють POS-матеріали (Point Of Sales – з англ. дослівно «місце продажів»). Дослідженнями доведено, що майже 60% покупців роблять с вибір безпосередньо в місці здійснення покупки. Саме тут вони й натрапляють на POS-матеріали – засоби оформлення місця продажів, які привертають увагу клієнта до виробів і мотивують до придбання товару.</p>
                            </div>
                            <div class="more"><a href="/post/point-of-sales/">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/card-post-materials/">POSтулат</a></div>
                            <div class="sh_text">
                                <p>Картонные POS материалы – развивающийся сегмент
                                    О целевом предназначении POS (Point of Sales) материалов как отдельного вида рекламной продукции и о преимуществах изготовления их из картона рассказал Александр Мартыненко, генеральный директор компании Maramax</p>
                            </div>
                            <div class="more"><a href="/post/card-post-materials/">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/doing-recl/">ВИГОТОВЛЕННЯ РЕКЛАМНИХ підлогових СТІЙОК ВІД ВИРОБНИКА</a></div>
                            <div class="sh_text">
                                <p>Рекламні підлогові стойкіІменно реклама, в першу чергу, привертає увагу потенційного клієнта. Чим якісніше реклама, тим більше людей цікавиться Вашою пропозицією. Рекламні підлогові стійки повинні своїм зовнішнім виглядом чіпляти погляд і направляти людини на придбання товару або послуг.</p>
                            </div>
                            <div class="more"><a href="/post/doing-recl/">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/vysnovok/">Висновок державної санітарно-епідеміологічної експертизи</a></div>
                            <div class="sh_text">
                                <p></p>
                            </div>
                            <div class="more"><a href="/post/vysnovok/">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/doing-higher//">Засоби підвищення продажів</a></div>
                            <div class="sh_text">
                                <p>Підвищення рівня продажів - найважливіше стратегічне напрям завоювання ринкових позицій. Маркетинговими засобами реалізації стратегічних планів виступають картонні POS-матеріали (POSM) і упаковка - на це положення звертають увагу фахівці ТОВ «Марамакс»</p>
                            </div>
                            <div class="more"><a href="/post/doing-higher//">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/pacaging-is/">Изготовление упаковки</a></div>
                            <div class="sh_text">
                                <p>Упаковка является защитным материалом и яркой рекламой любого товара. Ее роль неоценима, как при производстве, так и при сбыте продукции. Именно внешняя оболочка придает товару индивидуальный облик, позволяет выделиться из общей массы аналогичных продуктов и заявить о себе.</p>
                            </div>
                            <div class="more"><a href="/post/pacaging-is/">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/doing-packages/">Производство упаковок</a></div>
                            <div class="sh_text">
                                <p>Для&nbsp; того чтобы успешно заявить о себе, любой товар должен иметь упаковку. Ведь именно на нее, красочную и информативную, обращает внимание каждый покупатель. А еще, с ее помощью намного легче и удобнее конкурировать на рынке. Но, только в том случае, когда упаковка качественная.</p>
                            </div>
                            <div class="more"><a href="/post/doing-packages/">Детальніше</a></div>
                        </li>
                        <li>
                            <div class="link"><a href="/post/gofrocart-package/">Упаковка из гофрокартона</a></div>
                            <div class="sh_text">
                                <p>Сегодня сложно найти на витринах магазинов товар без упаковки. В нашем современном мире пакуют все. Тара и упаковка могут быть из стекла, пластика, полиэтилена, бумаги, картона и гофрокартона. Причем из всего перечисленного наиболее универсальной и востребованной является упаковка из гофрокартона.</p>
                            </div>
                            <div class="more"><a href="/post/gofrocart-package/">Детальніше</a></div>
                        </li>
                    </ul>
                </div>

<!--                <div class="pager">-->
<!--                    <div class="pods-pagination-paginate ">-->
<!--                        <ul class="page-numbers">-->
<!--                            <li><span class="page-numbers current">1</span></li>-->
<!--                            <li><a class="page-numbers" href="/%d0%bf%d1%83%d0%b1%d0%bb%d1%96%d0%ba%d0%b0%d1%86%d1%96%d1%97/?pg=2">2</a></li>-->
<!--                        </ul>-->
<!--                    </div>			-->
<!--                </div>-->

            </div>
        </div>
    </div>

    <div class="feed">
        <div class="wrap">
            <span class="_title">Зв'яжіться з нами</span>

            <?= CallbackWidget::widget() ?>

        </div>
    </div>
    <div id="top" style="display: block;">ВГОРУ</div>    </section>