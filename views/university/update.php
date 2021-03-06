<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\University */

$this->title = 'Обновить информацию о ВУЗе: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ВУЗ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="university-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
