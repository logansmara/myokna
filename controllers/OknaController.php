<?php

namespace app\controllers;

use Yii;
use app\models\Slider;
use app\models\CalculatorForm;
use app\models\OknaWindows;
use app\models\OknaWindowsill; // подоконник
use app\models\OknaInstallation; // монтаж
use app\models\OknaSlopes; // откосы
use app\models\OknaCheckbox;
use app\models\OknaDelivery; // доставка
use app\models\OknaProfile; // профиль
use app\models\OknaHardware; // фурнитура
use app\models\OknaSteklopaket; // стеклопакет
use app\models\OknaOtliv; // отлив
use app\models\OknaLamination; // ламинация
use app\models\OknaMosquito; // москитная сетка

class OknaController extends \yii\web\Controller
{

	public function actionIndex()
    {
        $slider = Slider::find()->all();
        return $this->render('index', compact('slider'));
    }

    public function actionRasschitat()
    {
        // значения окон из таблицы (возрастание по коэффициенту value)
        $windows = OknaWindows::find()->orderBy(['value' => SORT_ASC,])->all();
        $windows1 = ''; // принятое из формы значение по умолчанию
        // значения подоконников из таблицы
        $windowsills = OknaWindowsill::find()->orderBy(['number' => SORT_ASC,])->all();
        $windowsill1 = ''; // принятое из формы значение по умолчанию
        // значения монтажа из таблицы
        $installations = OknaInstallation::find()->orderBy(['number' => SORT_ASC,])->all();
        $installation1 = ''; // принятое из формы значение по умолчанию
        // значения откосов из таблицы
        $slopes = OknaSlopes::find()->all();
        $slopes1 = ''; // принятое из формы значение по умолчанию
    	$calculator = new CalculatorForm();
        // чтобы активной была первая радио кнопка
        $window = OknaWindows::find()->orderBy(['id' => SORT_ASC,])->asArray()->one();
        $calculator->windows = $window['id'];
        // чекбоксы
        $checkbox = OknaCheckbox::find()->orderBy(['number' => SORT_ASC,])->all();
        $checkbox1 = ''; // принятое из формы значение по умолчанию
        /* доставка
        добавляем orderBy(['id' => SORT_ASC,]), чтобы сортировалась в select строго по увеличению id, иначе сортируется так, как выдается в таблице в админке (как произвольно получается)
        */
        // значения доставки из таблицы
        $delivery = OknaDelivery::find()->orderBy(['number' => SORT_ASC,])->all();
        $delivery1 = '';
        // значения профиля из таблицы
        $profile = OknaProfile::find()->orderBy(['number' => SORT_ASC,])->all();
        $profile1 = '';
        // значения фурнитуры из таблицы
        $hardware = OknaHardware::find()->orderBy(['number' => SORT_ASC,])->all();
        $hardware1 = '';
        // значения стеклопакета из таблицы
        $steklopaket = OknaSteklopaket::find()->orderBy(['number' => SORT_ASC,])->all();
        $steklopaket1 = '';
        // значения стеклопакета из таблицы
        $otliv = OknaOtliv::find()->orderBy(['number' => SORT_ASC,])->all();
        $otliv1 = '';
        // значения ламинации из таблицы
        $lamination = OknaLamination::find()->orderBy(['number' => SORT_ASC,])->all();
        $lamination1 = '';
        // значения москитной сектки из таблицы
        $mosquito = OknaMosquito::find()->orderBy(['number' => SORT_ASC,])->all();
        $mosquito1 = '';

        $length1 = ''; // принятое из формы значение по умолчанию
        $height1 = ''; // принятое из формы значение по умолчанию
        if($calculator->load(Yii::$app->request->post())) {
            $windows1 = $calculator->windows;
            $length1 = $calculator->length;
            $height1 = $calculator->height;
            $windowsill1 = $calculator->windowsill;
            $installation1 = $calculator->installation;
            $slopes1 = $calculator->slopes;
            $checkbox1 = $calculator->checkbox;
            $delivery1 = $calculator->delivery;
            $profile1 = $calculator->profile;
            $hardware1 = $calculator->hardware;
            $steklopaket1 = $calculator->steklopaket;
            $otliv1 = $calculator->otliv;
            $lamination1 = $calculator->lamination;
            $mosquito1 = $calculator->mosquito;
        }
        return $this->render('rasschitat', [
            'calculator' => $calculator,
            'windows' => $windows,
            'windows1' => $windows1,
            'length1' => $length1,
            'height1' => $height1,
            'windowsills' => $windowsills,
            'windowsill1' => $windowsill1,
            'installations' => $installations,
            'installation1' => $installation1,
            'slopes' => $slopes,
            'slopes1' => $slopes1,
            'checkbox' => $checkbox,
            'checkbox1' => $checkbox1,
            'delivery' => $delivery,
            'delivery1' => $delivery1,
            'profile' => $profile,
            'profile1' => $profile1,
            'hardware' => $hardware,
            'hardware1' => $hardware1,
            'steklopaket' => $steklopaket,
            'steklopaket1' => $steklopaket1,
            'otliv' => $otliv,
            'otliv1' => $otliv1,
            'lamination' => $lamination,
            'lamination1' => $lamination1,
            'mosquito' => $mosquito,
            'mosquito1' => $mosquito1,
        ]);
    }

    public function actionQwerty()
    {
        $windowsill = OknaWindowsill::find()->all();
        return $this->render('qwerty', compact('windowsill'));
    }

}
