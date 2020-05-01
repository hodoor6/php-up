<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%employees}}`.
 */
class m200501_114004_drop_city_column_from_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('employees','city');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('employees','city',$this->string(255));
    }
}
