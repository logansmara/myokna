<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaHardware */

$this->title = 'Create Okna Hardware';
$this->params['breadcrumbs'][] = ['label' => 'Okna Hardwares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-hardware-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
