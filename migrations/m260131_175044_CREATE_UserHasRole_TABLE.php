<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%UserHasRole}}`.
 */
class m260131_175044_CREATE_UserHasRole_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%UserHasRole}}', [
            'uhr_userid' => $this->integer()->notNull(),
            'uhr_roleid' => $this->integer()->notNull()
        ]);

        $this->addPrimaryKey('PK_UserHasRole', '{{%UserHasRole}}', ['uhr_userid', 'uhr_roleid']);
        $this->addForeignKey('FK_UserHasRole_User','{{%UserHasRole}}', 'uhr_userid', '{{%USER}}', 'user_id');
        $this->addForeignKey('FK_UserHasRole_Role','{{%UserHasRole}}', 'uhr_roleid', '{{%ROLE}}', 'role_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_UserHasRole_Role','{{%UserHasRole}}');
        $this->dropForeignKey('FK_UserHasRole_User','{{%UserHasRole}}');
        $this->dropPrimaryKey('PK_UserHasRole','{{%UserHasRole}}');
        $this->dropTable('{{%UserHasRole}}');
    }
}
