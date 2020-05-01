<?php


namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;

class MailerController extends Controller
{
    public function actionSend()
    {
        $listNews = News::getListNews();
        $subsribers = Subscriber::getListSubscriber();
        $count =  Sender::run($subsribers ,$listNews);

    Console::output("\nEmail send: {$count}");

    }

    public function actionTest()
    {
        echo 'Test';
        die;
    }
}