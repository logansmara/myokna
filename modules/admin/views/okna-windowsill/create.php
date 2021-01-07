<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaWindowsill */

$this->title = 'Create Okna Windowsill';
$this->params['breadcrumbs'][] = ['label' => 'Okna Windowsills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-windowsill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
