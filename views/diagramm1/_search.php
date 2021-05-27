<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diagramm1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagramm1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'accepted') ?>

    <?= $form->field($model, 'rejected') ?>

    <?= $form->field($model, 'sum') ?>

    <?php // echo $form->field($model, 'accepted2') ?>

    <?php // echo $form->field($model, 'rejected2') ?>

    <?php // echo $form->field($model, 'sum2') ?>

    <?php // echo $form->field($model, 'data1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
