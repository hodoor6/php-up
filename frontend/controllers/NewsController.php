<?php


namespace frontend\controllers;

use frontend\models\Test;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionCount()
    {

        $CountNews = Test::getCountNews();
     return  $this->render('news-list',['countNews' => $CountNews]);
    }

}