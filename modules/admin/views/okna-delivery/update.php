<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaDelivery */

$this->title = 'Update Okna Delivery: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Okna Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="okna-delivery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
