<?php


namespace console\controllers;
use console\models\News;
use Yii;


class NewsController extends \yii\console\Controller
{
    public function actionGetNews()
    {
        $listNews = News::getListNews();

        var_dump($listNews);
        die;
       return $listNews;

    }


    public function actionGetEmail()
    {
       return $listEmail = News::AllSubscriberEmail();


    }



    public function actionSend()
    {
        $messages = [];
        foreach ($this->actionGetEmail() as $email) {

            $messages[] = Yii::$app->mailer->compose('textbody', [
                'message' => $this->actionGetNews(),
            ])
                ->setFrom('mamba4dp@gmail.com')
                ->setTo($email)
                ->setSubject('Тема сообщения');
                                  }



        $result =  Yii::$app->mailer->sendMultiple($messages);
        var_dump($result);
    }
    }