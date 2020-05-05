<?php


namespace frontend\models\example;
use Yii;

class ExampleValidation extends \yii\base\Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 2;
    const STATUS_ARCHIVED = 3;

    public $testAttribute;
    public $startValue;
    public $endValue;
    public $options;

    public function rules()
    {
        return [
            [['options'], 'required'],
            [['options'], 'each', 'rule' => ['integer']],
//            [['testAttribute'], 'required'],
//            [['testAttribute'], 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/'],
//            ['startValue', 'compare',
//                'compareAttribute' => 'endValue',
//                'operator' => '<',
//            ],
//            [['endValue'],'safe'],
//            [['testAttribute'], 'url', 'defaultScheme' => 'http'],
        ];
    }

    public function save()
    {
        return true;
    }
}