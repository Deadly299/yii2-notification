<?php

use yii\db\Migration;

class m170908_105634_create_table_notification extends Migration
{
    public function safeUp() {
        $this->createTable('notification', [
            'id' => $this->primaryKey(),
            'model_name' => $this->string(255)->null(),
            'item_id' => $this->integer(11)->null(),
            'user_send' => $this->integer(11)->null(),
            'user_recipient' => $this->integer(11)->null(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('notification');
    }
}
