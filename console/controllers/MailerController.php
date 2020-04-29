<?php


namespace console\controllers;

use Yii;
use yii\console\Controller;

class MailerController extends Controller
{
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('mamba4dp@gmail.com')
            ->setTo('mamba4dp@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
        var_dump($result);
        die;
    }

    public function actionTest()
    {
        echo 'Test';
        die;
    }
}