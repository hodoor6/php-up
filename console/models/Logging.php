<?php


namespace console\models;


class Logging
{
    public static function logSendNotificationFile($email)
    {

        array_pop($email);
        $email = implode( ', ', $email);
        $message  =" В ". date("G:i:s Y-d-m"). " уведомление о зарплате было отправлено на следующие email:  {$email}";
        $file = file_get_contents("/var/www/project/frontend/web/log.txt", ' ');
        file_put_contents('/var/www/project/frontend/web/log.txt',
            $file . $message . PHP_EOL );
  }
}