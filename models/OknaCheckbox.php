<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okna_checkbox".
 *
 * @property int $id
 * @property int $number
 * @property string $value
 * @property string $name
 */
class OknaCheckbox extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okna_checkbox';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'value', 'name'], 'required'],
            [['number'], 'integer'],
            [['value', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'value' => 'Value',
            'name' => 'Name',
        ];
    }
}
