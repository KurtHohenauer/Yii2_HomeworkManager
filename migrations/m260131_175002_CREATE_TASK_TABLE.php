<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%TASK}}`.
 */
class m260131_175002_CREATE_TASK_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%TASK}}', [
            'task_id' => $this->primaryKey(),
            'task_title' => $this->string(255)->notNull(),
            'task_description' => $this->text()->notNull(),
            'task_duedate' => $this->dateTime()->notNull(),
            'task_done' => $this->boolean()->defaultValue(false),
            'task_subjectid' => $this->integer()->notNull(),
            'task_userid' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('FK_TaskToSubject','{{%TASK}}', 'task_subjectid', '{{%SUBJECT}}', 'subject_id');
        $this->addForeignKey('FK_TaskToUser','{{%TASK}}', 'task_userid', '{{%USER}}', 'user_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_TaskToSubject','{{%TASK}}');
        $this->dropForeignKey('FK_TaskToUser','{{%TASK}}');
        $this->dropTable('{{%TASK}}');
    }
}
