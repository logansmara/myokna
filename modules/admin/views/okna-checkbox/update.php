<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaCheckbox */

$this->title = 'Update Okna Checkbox: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Okna Checkboxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="okna-checkbox-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
