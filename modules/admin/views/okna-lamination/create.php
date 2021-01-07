<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaLamination */

$this->title = 'Create Okna Lamination';
$this->params['breadcrumbs'][] = ['label' => 'Okna Laminations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-lamination-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
