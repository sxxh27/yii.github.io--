<?php

use yii\helpers\Html;

use yii\helpers\Url;

$this->title = 'страница 3';

?>

<section>
    <a href="<?= Url::to(['site/index'])?>">Главная</a>


    

    <?= Html::beginForm('post'); ?>
    <input type="text">
    <input type="button" value="отправь">
    <?= Html::endForm();?>




    
    <img src="<?= Url::to(['img/img.jpg']) ?>">

</section>