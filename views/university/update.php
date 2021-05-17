<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\University */

$this->title = 'Изменить: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Список все ВУЗов', 'url' => ['indexmon']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="university-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
