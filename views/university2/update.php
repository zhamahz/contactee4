<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\University */
/* @var $model app\models\StudentRegistration */

$this->title = 'Update University2: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'University2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="university2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('student-registration/_form', [
        'model' => $model,
    ]) ?>

</div>
