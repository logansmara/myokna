<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaMosquito */

$this->title = 'Create Okna Mosquito';
$this->params['breadcrumbs'][] = ['label' => 'Okna Mosquitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-mosquito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
