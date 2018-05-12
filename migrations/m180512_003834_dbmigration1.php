<?php

use yii\db\Migration;

/**
 * Class m180512_003834_dbmigration1
 */
class m180512_003834_dbmigration1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->execute(include __DIR__ . '/mescyt_time_managment.sql');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        echo "m180512_003834_dbmigration1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m180512_003834_dbmigration1 cannot be reverted.\n";

        return false;
    }
    */
}
