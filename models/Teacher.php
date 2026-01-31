<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%TEACHER}}".
 *
 * @property int $teacher_id
 * @property string $teacher_firstname
 * @property string $teacher_lastname
 * @property int|null $teacher_active
 *
 * @property TeacherTeachSubject[] $teacherTeachSubjects
 * @property Subject[] $ttsSubjects
 */
class Teacher extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%TEACHER}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_active'], 'default', 'value' => 1],
            [['teacher_firstname', 'teacher_lastname'], 'required'],
            [['teacher_active'], 'integer'],
            [['teacher_firstname', 'teacher_lastname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'teacher_firstname' => Yii::t('app', 'Teacher Firstname'),
            'teacher_lastname' => Yii::t('app', 'Teacher Lastname'),
            'teacher_active' => Yii::t('app', 'Teacher Active'),
        ];
    }

    /**
     * Gets query for [[TeacherTeachSubjects]].
     *
     * @return \yii\db\ActiveQuery|TeacherTeachSubjectQuery
     */
    public function getTeacherTeachSubjects()
    {
        return $this->hasMany(TeacherTeachSubject::class, ['tts_teacherid' => 'teacher_id']);
    }

    /**
     * Gets query for [[TtsSubjects]].
     *
     * @return \yii\db\ActiveQuery|SubjectQuery
     */
    public function getTtsSubjects()
    {
        return $this->hasMany(Subject::class, ['subject_id' => 'tts_subjectid'])->viaTable('{{%TeacherTeachSubject}}', ['tts_teacherid' => 'teacher_id']);
    }

    /**
     * {@inheritdoc}
     * @return TeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeacherQuery(get_called_class());
    }

}
