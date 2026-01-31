<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%SUBJECT}}`.
 */
class m260131_174955_CREATE_SUBJECT_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%SUBJECT}}', [
            'subject_id' => $this->primaryKey(),
            'subject_name' => $this->string(255)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%SUBJECT}}');
    }
}
