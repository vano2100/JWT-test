<?php

use yii\db\Migration;

/**
 * Class m191112_054241_words
 */
class m191112_054241_words extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('words', [
            'id'=>$this->primaryKey(),
            'en'=>$this->string(45),
            'ru'=>$this->string(45),
        ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('words');
    }

}
