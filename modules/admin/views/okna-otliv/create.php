<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaOtliv */

$this->title = 'Create Okna Otliv';
$this->params['breadcrumbs'][] = ['label' => 'Okna Otlivs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-otliv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
