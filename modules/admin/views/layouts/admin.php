<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?= Url::to(['/my/index']); ?>">Главная</a></li>

<hr style="clear: both;">
    <div class="container">
    <ul>
        <li>
            <a href="<?= Url::to(['/admin/proba-images']); ?>">proba-images</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/slider']); ?>">slider</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/slider-images']); ?>">slider-images</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-images']); ?>">okna-images</a>
        </li>
    	<li>
    		<a href="<?= Url::to(['/admin/okna-windows']); ?>">okna-windows</a>
    	</li>
    	<li>
    		<a href="<?= Url::to(['/admin/okna-windowsill']); ?>">okna-windowsill</a>
    	</li>
        <li>
            <a href="<?= Url::to(['/admin/okna-installation']); ?>">okna-installation</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-slopes']); ?>">okna-slopes</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-checkbox']); ?>">okna-checkbox</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-delivery']); ?>">okna-delivery</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-profile']); ?>">okna-profile</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-hardware']); ?>">okna-hardware</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-steklopaket']); ?>">okna-steklopaket</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-otliv']); ?>">okna-otliv</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-lamination']); ?>">okna-lamination</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/okna-mosquito']); ?>">okna-mosquito</a>
        </li>
        <li>
            <a href="<?= Url::to(['/admin/']); ?>">admin</a>
        </li>
    <!-- только администратор -->
    <?php if(Yii::$app->user->identity->username == 'admin1'):?>
        <li>
            <a href="<?= Url::to(['/admin/category']); ?>">category</a>
        </li>
    <?php endif; ?>
    <!-- администратор и редактор -->
    <?php if(Yii::$app->user->identity->username == 'admin1' || Yii::$app->user->identity->username == 'redactor1'):?>
        <li>
            <a href="<?= Url::to(['/admin/product']); ?>">product</a>
        </li>
    <?php endif; ?>
    </ul>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
