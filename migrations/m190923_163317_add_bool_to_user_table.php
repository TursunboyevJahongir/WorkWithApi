<?php

use yii\db\Migration;

/**
 * Class m190923_163317_add_bool_to_user_table
 */
class m190923_163317_add_bool_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','bool','boolean');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190923_163317_add_bool_to_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190923_163317_add_bool_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
