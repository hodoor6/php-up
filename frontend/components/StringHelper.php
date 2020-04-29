<?php


namespace frontend\components;

use Yii;

class StringHelper
{
    public $limit;
    public $limitWord;

    /**
     * StringHelper constructor.
     * @param $limit
     */
    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
        $this->limitWord = Yii::$app->params['countWordLimit'];
    }


    public function getShort(string $string, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }
        return mb_strimwidth($string, 0, strpos($string, ' ', $limit), ' ...');
    }

    public function getCountWordsFromString(string $string, $limitWord = null)
    {
        if ($limitWord === null) {
            $limitWord = $this->limitWord;
        }

        $arrayWords = explode(" ", $string);
        $arrayWords = array_slice($arrayWords, 0,5);
        $countWords = implode(" ", $arrayWords) . ' ...';
         return $countWords;
    }


}