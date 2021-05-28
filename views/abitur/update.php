<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Abitur */

$this->title = 'Изменить статус заявления: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Список заявлений на визу', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="abitur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
