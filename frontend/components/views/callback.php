<!--https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_complete-->

<?php
switch(\Yii::$app->language){
    case 'ru':
        $title = 'Оставьте заявку, мы с Вами свяжемся';
        $name = 'Имя';
        $phone = 'Телефон';
        $message = 'Ваше сообщение';
        $send = 'Отправить';
        break;
    case 'uk':
        $title = 'Залиште заявку, ми з Вами зв\'яжемося';
        $name = 'Ім\'я';
        $phone = 'Телефон';
        $message = 'Ваше повідомлення';
        $send = 'Відправити';
        break;
    case 'en':
        $title = 'Leave a request, we will contact you';
        $name = 'Name';
        $phone = 'Phone';
        $message = 'Your message';
        $send = 'Send';
        break;
    case 'lt':
        $title = 'Palikite užklausą, mes susisieksime su jumis';
        $name = 'Vardas';
        $phone = 'Telefono numeris';
        $message = 'Jūsų žinutė';
        $send = 'Pateikti';
        break;

}
?>


<div class="form">
    <p><?= $title ?></p>
    <div role="form" class="wpcf7" lang="ru-RU" dir="ltr">
        <div class="screen-reader-response"></div>
        <form name="callback_form" action="/<?= Yii::$app->language ?>/callback/index" method="post" class="wpcf7-form" novalidate="novalidate">
            <div class="row">
                <span class="wpcf7-form-control-wrap fio">
                    <input type="text" name="fio" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?= $name ?>" />
                </span>
                <span class="wpcf7-form-control-wrap email">
                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-Mail" /></span>
                <span class="wpcf7-form-control-wrap tel">
                    <input required type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="<?= $phone ?>" />
                </span>
            </div>
            <div class="row">
                <span class="wpcf7-form-control-wrap msg">
                    <textarea name="msg" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="<?= $message ?>"></textarea>
                </span>
            </div>
            <div class="row">
                <input type="submit" value="<?= $send ?>" class="wpcf7-form-control wpcf7-submit" />
            </div>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
    </div>
</div>
