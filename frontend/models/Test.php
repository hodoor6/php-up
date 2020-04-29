<?php


namespace frontend\models;

use Yii;

class Test
{
    /**
     * @return array|\yii\db\DataReader
     * @throws \yii\db\Exception
     */

    public static function getPostList()
    {

        $sql = "SELECT * FROM posts";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $helper = Yii::$app->stringHelper;

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['title'] = Yii::$app->stringHelper->getCountWordsFromString($item['title']);
            }
        }

        return $result;
    }


    /**
     * @param integer $max
     * @return array
        */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = "SELECT * FROM news LIMIT {$max}";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $helper = Yii::$app->stringHelper;

        if(!empty($result) && is_array($result)){
            foreach ($result as &$item){
                $item['content'] = Yii::$app->stringHelper->getShort($item['content'], 15);
            }
       }

return $result;

    }

    /**
     * @param integer $id
     * @return array|false|\yii\db\DataReader
      */
    public static function getItem($id)
    {
        $max = intval($id);
        $sql = "SELECT * FROM news WHERE id ={$id}";
        $result = Yii::$app->db->createCommand($sql)->queryOne();
        return $result;

    }

    public static function getCountNews()
    {
        $sql = "SELECT * FROM news";
        $result =  Yii::$app->db->createCommand('SELECT COUNT(*) FROM news')
            ->queryScalar();
;
        return $result;
}

}

//        $temparr = [];
//        foreach ($result as $keys=> $item)
//        {
//        foreach ($item as $key => $value ) {
//            if ($key=='content') {
//                $temparr['content'] = StringHelper::GetShort($value);;
//            }
//            else {
//                $temparr[$key]=$value;
//  }
//        }
//            $result[$keys] = $temparr;
//
//        }
//        dd($result);



//        foreach ($result as $keys=> $item)
//                {
//             foreach ($item as $key =>$value) {
//
//                 dump($key);
//                 if ($key == 'content') {
////                dump($item);
//                     $result[$keys] = $item['title'] = StringHelper::GetShort($value);
//                 } else{
//                     $result[$keys] = $item[$key]$value;
//                 }
//             }
//        }
//
//        dd($result);

//  return  $rows = (new \yii\db\Query())
//        ->select('*')
//        ->from('news')
//           ->all();


