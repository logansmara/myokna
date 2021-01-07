<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
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
$this->title = 'Рассчитать окно';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">

<!-- Результаты расчета -->
<div class="col-sm-12">
<div class="result1">
<?php
/*
В $items4 = ArrayHelper::map($windows,'id','name') мы получаем значение name, а нам в калькуляторе нужно значение value
Получаем строку из таблицы okna-windows , где id = $windows1 - принятое из формы значение (смотри Controller).
Строка нужна для получения $wind1-name для использования $wind1->value в онлайнкалькуляторе
*/
$wind1 = OknaWindows::find()->where('id = :id', [':id' => $windows1])->one();

//Получаем строку из таблицы okna-windowsill , где id = id для получения $windowsill1-name
$windsill1 = OknaWindowsill::find()->where('id = :id', [':id' => $windowsill1])->one();

//Получаем строку из таблицы okna-installation , где id = id для получения $installation1-name
$install1 = OknaInstallation::find()->where('id = :id', [':id' => $installation1])->one();

//Получаем строку из таблицы okna-slopes , где id = id для получения $slope1-name
$slope1 = OknaSlopes::find()->where('id = :id', [':id' => $slopes1])->one();
/*
Получаем строку из таблицы okna-checkbox , где id = id (i стекло)
*/
$checkbox11 = OknaCheckbox::find()->where('id = :id', [':id' => $checkbox1[0]])->one();

/*Получаем строку из таблицы okna-checkbox , где id = id (Многофункциональное 
стекло)
*/
$checkbox12 = OknaCheckbox::find()->where('id = :id', [':id' => $checkbox1[1]])->one();
/*Получаем строку из таблицы okna-checkbox , где id = id (Детский 
замок)
*/
$checkbox13 = OknaCheckbox::find()->where('id = :id', [':id' => $checkbox1[2]])->one();
//Получаем строку из таблицы okna-delivery (Доставка) , где id = id
$deliveryone1 = OknaDelivery::find()->where('id = :id', [':id' => $delivery1])->one();
//Получаем строку из таблицы okna-profile (Профиль) , где id = id
$profileone1 = OknaProfile::find()->where('id = :id', [':id' => $profile1])->one();
//Получаем строку из таблицы okna-hardware (Фурнитура) , где id = id
$hardwareone1 = OknaHardware::find()->where('id = :id', [':id' => $hardware1])->one();
//Получаем строку из таблицы okna-steklopaket , где id = id
$steklopaketone1 = OknaSteklopaket::find()->where('id = :id', [':id' => $steklopaket1])->one();
//Получаем строку из таблицы okna-otliv , где id = id
$otlivone1 = OknaOtliv::find()->where('id = :id', [':id' => $otliv1])->one();
//Получаем строку из таблицы okna-lamination , где id = id
$laminationone1 = OknaLamination::find()->where('id = :id', [':id' => $lamination1])->one();
//Получаем строку из таблицы okna-mosquito , где id = id
$mosquitoone1 = OknaMosquito::find()->where('id = :id', [':id' => $mosquito1])->one();
?>

<p>
Результаты расчета :
<?php
if ($length1) {
$sum = 
$length1 * // Высота
$height1 / // Ширина
400 *
$windsill1->value * // Подоконник
$install1->value * // Монтаж
$slope1->value * // Откосы
$deliveryone1->value * // Доставка
$profileone1->value * // Профиль
$hardwareone1->value * // Фурнитура
$steklopaketone1->value * // Стеклопакет
$otlivone1->value * // Отлив
$laminationone1->value * // Ламинация
$mosquitoone1->value * // Москитная сетка

$wind1->value; // Тип конструции
if ($checkbox11) {
	$sum = $sum + $checkbox11->value;
}
if ($checkbox12) {
	$sum = $sum + $checkbox12->value;
}
if ($checkbox13) {
	$sum = $sum + $checkbox13->value;
}

// Округляем до целого числа
$sum = round($sum);

echo $sum;
} elseif (!$length1) {
	//значение до изменения первоначальных данных в форме
	echo 5336;
}

?>
</p>
</div>
</div>

<!-- Форма -->
<?php $form = ActiveForm::begin(['id' => 'contact-form1']); ?>

<?php
/*
ArrayHelper - Получение пар ключ-значение
https://www.yiiframework.com/doc/guide/2.0/ru/helper-array
*/
$items1 = ArrayHelper::map($windowsills,'id','name');
$items2 = ArrayHelper::map($installations,'id','name');
$items3 = ArrayHelper::map($slopes,'id','name');
$items4 = ArrayHelper::map($windows,'id','name');
$items5 = ArrayHelper::map($checkbox,'id','name');
$items6 = ArrayHelper::map($delivery,'id','name');
$items7 = ArrayHelper::map($profile,'id','name');
$items8 = ArrayHelper::map($hardware,'id','name');
$items9 = ArrayHelper::map($steklopaket,'id','name');
$items10 = ArrayHelper::map($otliv,'id','name');
$items11 = ArrayHelper::map($lamination,'id','name');
$items12 = ArrayHelper::map($mosquito,'id','name');
?>

<?php
// http://web-sprints.ru/yii2-dropdownlist-vyipadayushhiy-spisok/

/*
В переменной $params определяем значение по умолчанию selected в выпадающем списке
*/

//Получаем строку (первую) из таблицы okna-windowsill , где selected = '1'
$windowsillone = OknaWindowsill::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw1 = $windowsillone->id;
$params1 =  ['options' =>[ $qw1 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-installation , где selected = '1'
$installationone = OknaInstallation::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw2 = $windowsillone->id;
$params2 =  ['options' =>[ $qw1 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-delivery , где selected = '1'
$deliveryone = OknaDelivery::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw6 = $deliveryone->id;
$params6 =  ['options' =>[ $qw6 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-profile , где selected = '1'
$profileone = OknaProfile::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw7 = $profileone->id;
$params7 =  ['options' =>[ $qw7 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-hardware , где selected = '1'
$hardwareone = OknaHardware::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw8 = $hardwareone->id;
$params8 =  ['options' =>[ $qw8 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-steklopaket , где selected = '1'
$steklopaketone = OknaSteklopaket::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw9 = $steklopaketone->id;
$params9 =  ['options' =>[ $qw9 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-otliv , где selected = '1'
$otlivone = OknaOtliv::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw10 = $otlivone->id;
$params10 =  ['options' =>[ $qw10 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-lamination , где selected = '1'
$laminationone = OknaLamination::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw11 = $laminationone->id;
$params11 =  ['options' =>[ $qw11 => ['Selected' => true]]];

//Получаем строку (первую) из таблицы okna-mosquito , где selected = '1'
$mosquitoone = OknaMosquito::find()->where('selected = :selected', [':selected' => '1'])->one();
$qw12 = $laminationone->id;
$params12 =  ['options' =>[ $qw12 => ['Selected' => true]]];
?>

<div class="col-sm-6">
<!--
Группа радио кнопок
https://p0vidl0.info/yii2-polya-activeform.html
-->
<?= $form->field($calculator, 'windows')->radioList($items4, [
'class' => 'radiolist1',
'item' => function ($index, $label, $name, $checked, $value) {
	/*
	Добавляем заголовки перед первыми картинками одно- двух- и трехстворчатых окон
	*/
         if (trim($label) == '1-1-okno-w.png') {
         	    return '<h4>Одностворчатое</h4><label class="' . ($checked ? ' active' : '') . '">' .
                Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . '<img src="/images/okna/' . $label . '">' . $value . '</label>';
         } elseif (trim($label) == '2-1-okno-w.png') {
         	    return '<h4>Двухстворчатое</h4><label class="' . ($checked ? ' active' : '') . '">' .
                Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . '<img src="/images/okna/' . $label . '">' . $value . '</label>';
         } elseif (trim($label) == '3-1-okno-w.png') {
         	    return '<h4>Трехстворчатое</h4><label class="' . ($checked ? ' active' : '') . '">' .
                Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . '<img src="/images/okna/' . $label . '">' . $value . '</label>';
         } else {
         	    return '<label class="' . ($checked ? ' active' : '') . '">' .
                Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . '<img src="/images/okna/' . $label . '">' . $value . '</label>';
         }
        },]) ?>
</div>

<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<?php
/*
если получено из формы значение высоты, то убираем значение по умолчанию
*/
if ($height1) {
	echo $form->field($calculator, 'height');
} else {
	echo $form->field($calculator, 'height')->textInput(['value' => 1400]);
}
/*
если получено из формы значение ширины, то убираем значение по умолчанию
*/
if ($length1) {
echo  $form->field($calculator, 'length');
} else {
echo  $form->field($calculator, 'length')->textInput(['value' => 700]);	
}
?>
<!--
Выпадающий список с выводом данных из модели (базы данных)
Необходимо подключение хелпера ArrayHelper
https://p0vidl0.info/yii2-vypadayushhij-spisok-dropdownlist.html
-->
<!-- input Подоконник -->
<?= $form->field($calculator, 'windowsill')->dropDownList($items1, $params1) ?>
<!-- input Монтаж -->
<?= $form->field($calculator, 'installation')->dropDownList($items2, $params2) ?>
<!-- input Откосы -->
<?= $form->field($calculator, 'slopes')->dropDownList($items3) ?>
<!-- input Доставка -->
<?= $form->field($calculator, 'delivery')->dropDownList($items6, $params6) ?>
<?php //echo Html::dropDownList('delivery', '19', $items6); ?>

</div>
<div class="col-sm-6">
<!-- input Профиль -->
<?php  echo $form->field($calculator, 'profile')->dropDownList($items7, $params7) ?>
<!-- input Фурнитура -->
<?php  echo $form->field($calculator, 'hardware')->dropDownList($items8, $params8) ?>
<!-- input Стеклопакет -->
<?php  echo $form->field($calculator, 'steklopaket')->dropDownList($items9, $params9) ?>
<!-- input Отлив -->
<?php  echo $form->field($calculator, 'otliv')->dropDownList($items10, $params10) ?>
<!-- input Ламинация -->
<?php  echo $form->field($calculator, 'lamination')->dropDownList($items11, $params11) ?>
<!-- input Москитная сетка -->
<?php  echo $form->field($calculator, 'mosquito')->dropDownList($items12, $params12) ?>
</div>
<div class="col-sm-12">
<?= $form->field($calculator, 'checkbox')->checkboxList($items5)->label('') ?>
<div style="clear: both;"></div>

<?php
/*
Включить кнопку, если отключить скрипт
*/
//echo Html::submitButton('Отправить', ['class' => 'btn btn-primary']);
?>

<div style="height: 30px;">
<button class="hidden1">Кнопка</button>
</div>
</div>

</div>
</div>

<?php ActiveForm::end(); ?>

<hr>

</div>

<?php
// Кнопка скрыта только при включенном javascript
$js = <<< JS
$(function() {
$('.hidden1').hide();
})(jQuery);
JS;
$this->registerJs($js);
?>
