<?php

namespace app\models;

use yii\base\Model;

class CalculatorForm extends Model
{
    public $length;
    public $height;
    public $windowsill;
    public $installation;
    public $slopes;
    public $windows;
    public $checkbox;
    public $delivery;
    public $profile;
    public $hardware;
    public $steklopaket;
    public $otliv;
    public $lamination;
    public $mosquito;

    public function rules()
    {
        return [
            [['length', 'height', 'windowsill', 'installation', 'slopes', 'windows', 'delivery', 'profile', 'hardware', 'steklopaket', 'otliv', 'lamination', 'mosquito'], 'required'],
            ['checkbox', 'safe']

        ];
    }

    public function attributeLabels()
    {
        return [
            'length' => 'Ширина (length)',
            'height' => 'Высота (height)',
            'windowsill' => 'Подоконник (windowsill)',
            'installation' => 'Монтаж (installation)',
            'slopes' => 'Откосы (slopes)',
            'windows' => 'Тип конструкции (windows)',
            'delivery' => 'Доставка (delivery)',
            'profile' => 'Профиль (profile)',
            'hardware' => 'Фурнитура (hardware)',
            'steklopaket' => 'Стеклопакет (steklopaket)',
            'otliv' => 'Отлив (otliv)',
            'mosquito' => 'Москитная сетка (mosquito)'
        ];
    }
}