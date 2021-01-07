<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaWindows */

$this->title = 'Create Okna Windows';
$this->params['breadcrumbs'][] = ['label' => 'Okna Windows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-windows-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
