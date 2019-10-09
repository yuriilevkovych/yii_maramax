<!--https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_complete-->
<div class="form">
    <p>Оставте заявку, мы с Вами свяжемся</p>
    <div role="form" class="wpcf7" lang="ru-RU" dir="ltr">
        <div class="screen-reader-response"></div>
        <form name="callback_form" action="/callback/index" method="post" class="wpcf7-form" novalidate="novalidate">
            <div class="row">
                <span class="wpcf7-form-control-wrap fio">
                    <input type="text" name="fio" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя" />
                </span>
                <span class="wpcf7-form-control-wrap email">
                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-Mail" /></span>
                <span class="wpcf7-form-control-wrap tel">
                    <input required type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Телефон" />
                </span>
            </div>
            <div class="row">
                <span class="wpcf7-form-control-wrap msg">
                    <textarea name="msg" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Ваше сообщение"></textarea>
                </span>
            </div>
            <div class="row">
                <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit" />
            </div>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
    </div>
</div>
