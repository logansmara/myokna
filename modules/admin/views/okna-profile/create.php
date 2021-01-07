<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OknaProfile */

$this->title = 'Create Okna Profile';
$this->params['breadcrumbs'][] = ['label' => 'Okna Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
