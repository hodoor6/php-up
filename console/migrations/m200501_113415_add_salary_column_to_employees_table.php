<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%employees}}`.
 */
class m200501_113415_add_salary_column_to_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%employees}}', 'salary', $this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%employees}}', 'salary');
    }
}
