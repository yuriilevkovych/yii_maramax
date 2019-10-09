<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;

class CallbackController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['post', 'get'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if(!empty($_POST['email']) || !empty($_POST['tel'])){
            
            $message = "Имя: {$_POST['fio']}" . PHP_EOL;
            $message .= "E-mail: {$_POST['email']}" . PHP_EOL;
            $message .= "Tel: {$_POST['tel']}" . PHP_EOL;
            $message .= "Сообщение: {$_POST['msg']}" . PHP_EOL;

            mail('yurii.levkovich@gmail.com', 'Обратная связь', $message);
            mail('a.martynenko@maramax.kiev.ua', 'Обратная связь', $message);

            return $this->redirect('/callback/success');
        }

        return $this->redirect('/callback/error');
    }

    public function actionError()
    {
        return $this->render('error');
    }

    public function actionSuccess()
    {
        return $this->render('success');
    }
}
//<h1>Спасибо за ваше обращение, мы Вам перезвоним в ближайшее время!</h1> <br/> <a href="/">Главная</a>