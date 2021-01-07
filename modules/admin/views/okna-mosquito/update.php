<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaMosquito */

$this->title = 'Update Okna Mosquito: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Okna Mosquitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="okna-mosquito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
