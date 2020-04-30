<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subcriber}}`.
 */
class m200429_162945_create_subcriber_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subcriber}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subcriber}}');
    }
}
