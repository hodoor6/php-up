<?php


namespace console\models;

use Yii;

class Sender
{
    public static function run($subscribers, $newsList)
    {
        $viewData = ['newsList'=>$newsList];
        $count =0;
        foreach ($subscribers as $subscriber) {

            $result = Yii::$app->mailer->compose('/mailer/newslist',$viewData)
                ->setFrom('mamba4dp@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Тема сообщения')
                ->send();

            if($result){
                $count++;
            }
                  }

        foreach ($newsList as $news) {
            $sendNews =  Yii::$app->db->createCommand()->update('news', ['status' => 2], "id = {$news['id']}")->execute();
        }

return $count;



    }
}