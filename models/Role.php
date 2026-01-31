<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ROLE}}".
 *
 * @property int $role_id
 * @property string $role_name
 *
 * @property User[] $uhrUsers
 * @property UserHasRole[] $userHasRoles
 */
class Role extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ROLE}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_name'], 'required'],
            [['role_name'], 'string', 'max' => 255],
            [['role_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'role_id' => Yii::t('app', 'Role ID'),
            'role_name' => Yii::t('app', 'Role Name'),
        ];
    }

    /**
     * Gets query for [[UhrUsers]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUhrUsers()
    {
        return $this->hasMany(User::class, ['user_id' => 'uhr_userid'])->viaTable('{{%UserHasRole}}', ['uhr_roleid' => 'role_id']);
    }

    /**
     * Gets query for [[UserHasRoles]].
     *
     * @return \yii\db\ActiveQuery|UserHasRoleQuery
     */
    public function getUserHasRoles()
    {
        return $this->hasMany(UserHasRole::class, ['uhr_roleid' => 'role_id']);
    }

    /**
     * {@inheritdoc}
     * @return RoleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RoleQuery(get_called_class());
    }

}
