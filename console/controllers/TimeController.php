<?php


namespace console\controllers;


class TimeController extends \yii\console\Controller
{

    public function actionGetTime()
    {
        echo 'Время отработки скрипта 1 минута в cron' . date("Y-d-m G:i:s");
        file_put_contents('test.txt',1);
    }
}