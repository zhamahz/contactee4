<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diagramm1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagramm1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rejected')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepted2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rejected2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sum2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
