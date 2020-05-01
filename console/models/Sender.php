<?php


namespace console\models;

use Yii;

class Sender
{

    public static function run($subscribers, $newsList)
    {
        $viewData = ['newsList' => $newsList];
        $count = 0;
        foreach ($subscribers as $subscriber) {

            $result = Yii::$app->mailer->compose('/mailer/newslist', $viewData)
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo($subscriber['email'])
                ->setSubject('Тема сообщения')
                ->send();

            if ($result) {
                $count++;
            }
        }
        foreach ($newsList as $news) {
            $sendNews = Yii::$app->db->createCommand()->update('news', ['status' => 2], "id = {$news['id']}")->execute();
        }

        return $count;


    }

    public static function sendNotificationEmployees($employees)
    {
        $count = 0;
        $sendEmail = [];
        foreach ($employees as $employee) {
            $result = Yii::$app->mailer->compose('/mailer/notification-employees', ['fullName' => $employee['full_name'], 'salary' => $employee['salary']])
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo($employee['email'])
                ->setSubject("Уважаемый " . $employee['full_name'] . " !Вам была начислена заработная плата")
                ->send();
            if ($result) {
                $count++;
                $sendEmail[] = $employee['email'];
            }
        }
        $sendEmail['count'] = $count;
        return $sendEmail;
    }
}