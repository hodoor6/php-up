<?php


namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use frontend\models\Subscribe;

class NewsletterController extends Controller
{

    public function actionSubscribe()
    {
        $model = new Subscribe;
        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {

            $model->email = $formData['email'];

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Subscribe completed!!!');
            } else {
                return $this->render('subscribe', ['model' => $model, 'formData' => $formData['email']]);
            }
        }
        return $this->render('subscribe', ['model' => $model]);
    }
}