<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\University */
/* @var $model app\models\StudentRegistration */

$this->title = 'Create University2';
$this->params['breadcrumbs'][] = ['label' => 'University2s', 'url' => ['student-registration/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="university2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
