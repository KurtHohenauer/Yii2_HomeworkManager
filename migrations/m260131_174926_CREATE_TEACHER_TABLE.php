<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%TEACHER}}`.
 */
class m260131_174926_CREATE_TEACHER_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%TEACHER}}', [
            'teacher_id' => $this->primaryKey(),
            'teacher_firstname' => $this->string(255)->notNull(),
            'teacher_lastname' => $this->string(255)->notNull(),
            'teacher_active' => $this->boolean()->defaultValue(true)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%TEACHER}}');
    }
}
