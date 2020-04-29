<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{

    public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];
        $list = TEST::getNewsList($max);
//        print_r($list);
        return $this->render('index', ['list' => $list]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('mamba4dp@gmail.com')
            ->setTo('mamba4dp@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();

        var_dump($result); die;
    }

    public function actionPost()
    {
        $posts = TEST::getPostList();
        return $this->render('post',[
                'posts' => $posts
            ]);
    }

    public function actionView($id)
    {
        $item = Test::getItem($id);

        return $this->render('view',[
            'item' =>$item
        ]);
    }

}