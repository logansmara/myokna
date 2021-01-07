<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okna_windows".
 *
 * @property int $id
 * @property int $value
 * @property string $name
 */
class OknaWindows extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okna_windows';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'name'], 'required'],
            [['value', 'name'], 'trim'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'name' => 'Name',
        ];
    }
}
