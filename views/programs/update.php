<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programs */

$this->title = 'Обновить специальность: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Специальность', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="programs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
