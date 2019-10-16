<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Page controller
 */
class PageController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'index' => [
                'class' => \yii\web\ViewAction::class,
                'viewPrefix' => \Yii::$app->language
            ]
        ];
    }
}
