<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Abitur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abitur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'id_university')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'id_country')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'id_speciality')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'status1')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'date1')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'status2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status2')->dropDownList([
        'Принять' => 'Принять',
        'Отклонить' => 'Отклонить'
    ]) ?>

    <?= $form->field($model, 'date2')->textInput() ?>

<!--    --><?//= $form->field($model, 'dop')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
