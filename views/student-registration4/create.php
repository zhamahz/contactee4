<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentRegistration4 */

$this->title = 'Create Student Registration4';
$this->params['breadcrumbs'][] = ['label' => 'Student Registration4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-registration4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
