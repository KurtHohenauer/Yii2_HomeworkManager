<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%USER}}`.
 */
class m260131_174916_CREATE_USER_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%USER}}', [
            'user_id' => $this->primaryKey(),
            'email' => $this->string(255)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'access_token' => $this->string(255)->notNull(),
            'activation_token' => $this->string(255)->notNull(),
            'username' => $this->string(255)->notNull(),
            'activated' => $this->boolean()->defaultValue(false)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%USER}}');
    }
}
