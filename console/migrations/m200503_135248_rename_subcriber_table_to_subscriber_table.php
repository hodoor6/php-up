<?php

use yii\db\Migration;

/**
 * Class m200503_135248_rename_subcriber_table_to_subscriber_table
 */
class m200503_135248_rename_subcriber_table_to_subscriber_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('subcriber', 'subscriber');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('subscriber', 'subcriber');
    }
}