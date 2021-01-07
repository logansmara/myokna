<?php

if(!isset($_COOKIE["name"])) {
  setcookie("name",time(),time()+240);
}
//раскоментировать, если надо удалить куки
//setcookie("name",time(),time()-3600);


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

<div>
<div class="header1"> 
<div class="nav1"> 
<span class="button">MENU</span>
<ul>
<li>
<a href="<?= Url::to(['/my/index']); ?>">my/index</a>
</li>                    
<li>
<a href="<?= Url::to(['/okna/index']); ?>">okna/index</a>
</li>                    
<li>
<a href="<?= Url::to(['/okna/rasschitat']); ?>">okna/rasschitat</a>
</li>
</ul>
</div> 
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
