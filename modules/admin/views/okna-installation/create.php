<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaInstallation */

$this->title = 'Create Okna Installation';
$this->params['breadcrumbs'][] = ['label' => 'Okna Installations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-installation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
