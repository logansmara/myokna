<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Okna Hardwares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-hardware-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Okna Hardware', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'value',
            'name',
            'selected',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
