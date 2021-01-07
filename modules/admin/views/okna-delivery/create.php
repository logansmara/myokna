<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaDelivery */

$this->title = 'Create Okna Delivery';
$this->params['breadcrumbs'][] = ['label' => 'Okna Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-delivery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
