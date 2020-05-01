<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m200501_104256_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees}}', [
            'id' => $this->primaryKey(),
           'full_name'=>$this->string(255),
           'birth_date'=>$this->date(),
           'city'=>$this->string(255),
           'start_date_work'=>$this->date(),
           'work_experience'=>$this->string(255),
           'position'=>$this->string(255),
           'department_number'=>$this->integer(11),
           'id_code'=>$this->string(255),
           'email'=>$this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees}}');
    }
}
