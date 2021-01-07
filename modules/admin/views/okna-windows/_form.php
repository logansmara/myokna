<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OknaWindows */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="okna-windows-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'value')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<hr>

<?php
$dir = 'images/okna';
$files1 = scandir($dir);
//echo "<pre>";
//print_r($files1);
//echo "</pre>";
?>

<?php foreach ($files1 as $value):?>
<?php if($value != '.' && $value != '..'): ?>
<!-- PHP7 (стр 390) -->
<?php $qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match($qw, $value)): ?>
<div style="display: inline-block; border: 1px solid #ccc; margin: 0 10px 10px 10px;">
<img src="/images/okna/<?= $value ?>" width="100px">
<br>
<?= $value ?>

</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
