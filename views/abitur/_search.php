<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AbiturSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abitur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'id_university') ?>

    <?= $form->field($model, 'id_country') ?>

    <?= $form->field($model, 'id_speciality') ?>

    <?php // echo $form->field($model, 'status1') ?>

    <?php // echo $form->field($model, 'date1') ?>

    <?php // echo $form->field($model, 'status2') ?>

    <?php // echo $form->field($model, 'date2') ?>

    <?php // echo $form->field($model, 'dop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
