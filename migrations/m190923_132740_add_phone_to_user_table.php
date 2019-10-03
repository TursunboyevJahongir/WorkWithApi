<?php

use yii\db\Migration;

/**
 * Class m190923_132740_add_phone_to_user_table
 */
class m190923_132740_add_phone_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'phone', 'varchar(12)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        $this->dropColumn('{{%user}}', 'phone');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190923_132740_add_phone_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
