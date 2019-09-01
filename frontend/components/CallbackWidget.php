<?php
namespace app\components;

use yii\base\Widget;

class CallbackWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('callback');
    }
}