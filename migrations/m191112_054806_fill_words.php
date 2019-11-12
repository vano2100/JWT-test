<?php

use yii\db\Migration;

/**
 * Class m191112_054806_fill_words
 */
class m191112_054806_fill_words extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert( 'words', [
            'en','ru'
        ],[
            ['family','Семья'],
            ['home','Дом'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->trancateTable('words');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191112_054806_fill_words cannot be reverted.\n";

        return false;
    }
    */
}
