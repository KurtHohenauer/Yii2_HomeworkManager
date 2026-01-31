<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ROLE}}`.
 */
class m260131_174932_CREATE_ROLE_TABLE extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ROLE}}', [
            'role_id' => $this->primaryKey(),
            'role_name' => $this->string(255)->notNull()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ROLE}}');
    }
}
