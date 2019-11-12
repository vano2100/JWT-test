<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "words".
 *
 * @property int $id
 * @property string $en
 * @property string $ru
 */
class Words extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'words';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['en', 'ru'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'en' => 'En',
            'ru' => 'Ru',
        ];
    }
}
