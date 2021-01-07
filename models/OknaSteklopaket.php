<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okna_steklopaket".
 *
 * @property int $id
 * @property int $number
 * @property string $value
 * @property string $name
 * @property int $selected
 */
class OknaSteklopaket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okna_steklopaket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'value', 'name', 'selected'], 'required'],
            [['number', 'selected'], 'integer'],
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
            'selected' => 'Selected',
        ];
    }
}
