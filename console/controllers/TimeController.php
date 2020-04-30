<?php


namespace console\controllers;


class TimeController extends \yii\console\Controller
{

    public function actionGetTime()
    {

        $currentTime  =' Время отработки скрипта 1 минута в cron ' . date("Y-d-m G:i:s");

        $file = file_get_contents("/var/www/project/frontend/web/log.txt", ' ');


        file_put_contents('/var/www/project/frontend/web/log.txt',
            $file . $currentTime . PHP_EOL );
//        $file = fopen("/var/www/project/frontend/web/log.txt", 'a+');
//        fwrite($file,$currentTime. PHP_EOL);
//        fclose($file);
    }
}