<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentRegistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--        --><? //= $form->field($model, 'id_user')->textInput() ?>


    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender',
        ['options' => ['tag' => false]])->radioList(['male' => 'мужской', 'female' => 'женский']) ?>
    <?= $form->field($model, 'birthday',
        ['options' => ['tag' => false]])->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'id_country',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Country::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_passport',
        ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?>

    <?= $form->field($model, 'pdf_attestat',
        ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?>
    <?= $form->field($model, 'pdf_motivation',
        ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
