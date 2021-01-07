<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaSlopes */

$this->title = 'Create Okna Slopes';
$this->params['breadcrumbs'][] = ['label' => 'Okna Slopes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-slopes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
