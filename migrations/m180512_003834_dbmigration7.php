<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180512_003834_dbmigration2
 */
class m180512_003834_dbmigration7 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        //$this->execute(include __DIR__ . '/mescyt_time_managment.sql');
        $this->execute(file_get_contents(Yii::getAlias('@app').'/migrations/mescyt_time_managment.sql'));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        echo "m180512_003834_dbmigration7 cannot be reverted.\n";

        return false;
    }
}
