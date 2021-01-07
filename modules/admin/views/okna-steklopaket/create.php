<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaSteklopaket */

$this->title = 'Create Okna Steklopaket';
$this->params['breadcrumbs'][] = ['label' => 'Okna Steklopakets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-steklopaket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
