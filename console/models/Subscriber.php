<?php

namespace console\models;

use Yii;

class Subscriber
{
    public static function getListSubscriber()
    {
        $sql = "SELECT * FROM subcriber";
        return $listEmail = Yii::$app->db->createCommand($sql)->queryAll();
    }
}