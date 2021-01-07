<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Okna Windows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okna-windows-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Okna Windows', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'value',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<hr>
<?php
$dir = 'images/okna';
$files1 = scandir($dir);
//echo "<pre>";
//print_r($files1);
//echo "</pre>";
?>

<?php foreach ($files1 as $value):?>
<?php if($value != '.' && $value != '..'): ?>
<!-- PHP7 (стр 390) -->
<?php $qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match($qw, $value)): ?>
<div style="display: inline-block; border: 1px solid #ccc; margin: 0 10px 10px 10px;">
<img src="/images/okna/<?= $value ?>" width="100px">
<br>
<?= $value ?>

</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
