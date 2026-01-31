<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%TeacherTeachSubject}}`.
 */
class m260131_175102_CREATE_TeacherTeachSubject_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%TeacherTeachSubject}}', [
            'tts_teacherid' => $this->integer()->notNull(),
            'tts_subjectid' => $this->integer()->notNull()
        ]);

        $this->addPrimaryKey('PK_TeacherTeachSubject', '{{%TeacherTeachSubject}}', ['tts_teacherid', 'tts_subjectid']);
        $this->addForeignKey('FK_TeacherTeachSubject_Teacher', '{{%TeacherTeachSubject}}', 'tts_teacherid', '{{%TEACHER}}', 'teacher_id');
        $this->addForeignKey('FK_TeacherTeachSubject_Subject', '{{%TeacherTeachSubject}}', 'tts_subjectid', '{{%SUBJECT}}', 'subject_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_TeacherTeachSubject_Subject', '{{%TeacherTeachSubject}}');
        $this->dropForeignKey('FK_TeacherTeachSubject_Teacher', '{{%TeacherTeachSubject}}');
        $this->dropPrimaryKey('PK_TeacherTeachSubject', '{{%TeacherTeachSubject}}');
        $this->dropTable('{{%TeacherTeachSubject}}');
    }
}
