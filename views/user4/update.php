<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User4 */

$this->title = 'Обновить списки приемной комиссии: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Приемная комиссия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="user4-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
