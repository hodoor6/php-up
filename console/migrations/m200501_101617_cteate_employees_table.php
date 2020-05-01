<?php

use yii\db\Migration;

/**
 * Class m200501_101617_cteate_employees_table
 */
class m200501_101617_cteate_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200501_101617_cteate_employees_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200501_101617_cteate_employees_table cannot be reverted.\n";

        return false;
    }
    */
}
