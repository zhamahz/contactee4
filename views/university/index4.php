<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Place */

$this->title = "Тест";

\yii\web\YiiAsset::register($this);
?>
<div class="place-view">

<h1><?= Html::encode($this->title) ?></h1>


id юзера: <?= $query ?>