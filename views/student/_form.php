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

    <!--    --><? //= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender',
        ['options' => ['tag' => false]])->radioList(['male' => 'мужской', 'female' => 'женский']) ?>

    <?= $form->field($model, 'birthday',
        ['options' => ['tag' => false]])->textInput(['class' => 'validate-input wrap-input100 input100 txt1', 'required' => true, 'type' => 'date']) ?>
    <?= $form->field($model, 'id_country',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Country::find()->all(), 'id', 'name')) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'photo_passport',
//        ['options' => ['tag' => false]])->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
<!---->
<!--    --><?//= $form->field($model, 'pdf_attestat',
//        ['options' => ['tag' => false]])->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
<!---->
<!--    --><?//= $form->field($model, 'pdf_motivation',
//        ['options' => ['tag' => false]])->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'id_uni_1',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_program_1',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality')) ?>

    <?= $form->field($model, 'datetime_reg_1',
        ['options' => ['tag' => false]])->textInput(['class' => 'validate-input wrap-input100 input100 txt1', 'required' => true, 'type' => 'date']) ?>

    <?= $form->field($model, 'id_uni_2',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_program_2',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality')) ?>

    <?= $form->field($model, 'datetime_reg_2',
        ['options' => ['tag' => false]])->textInput(['class' => 'validate-input wrap-input100 input100 txt1', 'required' => true, 'type' => 'date']) ?>


    <?= $form->field($model, 'id_uni_3',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_program_3',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality')) ?>

    <?= $form->field($model, 'datetime_reg_3',
        ['options' => ['tag' => false]])->textInput(['class' => 'validate-input wrap-input100 input100 txt1', 'required' => true, 'type' => 'date']) ?>

    <?= $form->field($model, 'id_uni_4',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_program_4',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality')) ?>

    <?= $form->field($model, 'datetime_reg_4',
        ['options' => ['tag' => false]])->textInput(['class' => 'validate-input wrap-input100 input100 txt1', 'required' => true, 'type' => 'date']) ?>


    <?= $form->field($model, 'id_uni_5',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'id_program_5',
        ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality')) ?>

    <?= $form->field($model, 'datetime_reg_5',
        ['options' => ['tag' => false]])->textInput(['class' => 'validate-input wrap-input100 input100 txt1', 'required' => true, 'type' => 'date']) ?>


    <!--    --><? //= $form->field($model, 'id_uni_accepted_1')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'id_uni_accepted_2')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'id_uni_accepted_3')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'id_uni_accepted_4')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'id_uni_accepted_5')->textInput() ?>

<!--    --><?//= $form->field($model, 'visa')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'datetime_visa')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'status_visa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
