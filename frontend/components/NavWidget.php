<?php
namespace app\components;

use yii\base\Widget;

class NavWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('nav');
    }
}