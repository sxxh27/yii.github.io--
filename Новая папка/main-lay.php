<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div style=" display:flex; justify-content: space-between; flex-wrap: wrap; background-color: #F5F5F5">
    <div style="margin:auto; padding:20px; font-size:20px; font-width: bold">LoGo</div>
    <div style="margin:auto; padding:20px; font-size:20px; font-width: bold">меню</div>
    <a href="<?= Url::to(['site/pageone'])?>">страница 1</a>
    <a href="<?= Url::to(['site/pagetwo'])?>">страница 2</a>
    <a href="<?= Url::to(['site/pagethree'])?>">страница 3</a>
    <a href="https://www.google.ru">google</a>

    </div>
</header>

<main role="main" class="flex-shrink-0">
        <?= $content ?>

</main>

<footer class="footer mt-auto py-3 text-muted"> 
    <div class="container" style="font-size:20px; font-width: bold; text-align:center">
       просто подвал
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
