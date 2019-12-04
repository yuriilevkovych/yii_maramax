<?php


// For development
/*****************************/
function p($var = null, $var2 = null){
    echo '<pre>';
    echo PHP_EOL;
    print_r($var);

    if($var2){
        echo '<br/>';
        print_r($var2);
    }
    echo PHP_EOL;
    die;
}
function v($var = null, $var2 = null){
    echo PHP_EOL;
    echo '<pre>';
    var_dump($var);

    if($var2){
        echo '<br/>';
        var_dump($var2);
    }
    echo PHP_EOL;
    die;
}
function d($var = null, $depth = 10){
    echo PHP_EOL;
    echo '<pre>';
    yii\helpers\VarDumper::dump($var, $depth);
    die;
}
/*****************************/
// For development end
/*****************************/

return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
];
