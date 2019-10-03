<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test_int_bool}}`.
 */
class m191003_052918_create_test_int_bool_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('test','int','int');
        $this->addColumn('test','bool','boolean');
        $this->addColumn('test','double','double');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test_int_bool}}');
    }
}
