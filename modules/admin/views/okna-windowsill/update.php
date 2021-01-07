<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaWindowsill */

$this->title = 'Update Okna Windowsill: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Okna Windowsills', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="okna-windowsill-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
