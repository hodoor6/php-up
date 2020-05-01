<?php


namespace console\models;

use Yii;

class Employees
{
    public static function getListEmployees()
    {
        $sql = "SELECT * FROM employees";
        return $list = Yii::$app->db->createCommand($sql)->queryAll();
    }
}