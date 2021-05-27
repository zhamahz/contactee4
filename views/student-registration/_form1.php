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


    <div class="col-lg-12"> <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?></div>

    <div class="col-lg-6"><?= $form->field($model, 'gender',
            ['options' => ['tag' => false]])->radioList(['male' => 'мужской', 'female' => 'женский']) ?></div>
    <div class="col-lg-6"><?= $form->field($model, 'birthday',
            ['options' => ['tag' => false]])->textInput(['type' => 'date']) ?></div>
    <div class="col-lg-6"> <?= $form->field($model, 'id_country',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Country::find()->all(), 'id', 'name')) ?></div>
    <div class="col-lg-6">  <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?></div>

    <div class="col-lg-4"> <?= $form->field($model, 'photo_passport',
            ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?></div>

    <div class="col-lg-4">   <?= $form->field($model, 'pdf_attestat',
            ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?></div>
    <div class="col-lg-4"> <?= $form->field($model, 'pdf_motivation',
            ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?></div>
    <br>
    <h1>Подать заявление</h1>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_uni_1',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select University']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_program_1',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select Speciality']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_uni_2',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select University']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_program_2',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select Speciality']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_uni_3',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select University']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_program_3',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select Speciality']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_uni_4',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select University']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_program_4',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select Speciality']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_uni_5',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\University::find()->all(), 'id', 'name'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select University']) ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'id_program_5',
            ['options' => ['tag' => false]])->dropDownList(ArrayHelper::map(\app\models\Programs::find()->all(), 'id', 'speciality'), ['selected' => true, 'value' => 'Select', 'prompt' => 'Select Speciality']) ?>
    </div>
    <div class="col-lg-6">

        <!--    --><? //= $form->field($model, 'id_uni_accepted_1')->textInput() ?>
        <!---->
        <!--    --><? //= $form->field($model, 'id_uni_accepted_2')->textInput() ?>
        <!---->
        <!--    --><? //= $form->field($model, 'id_uni_accepted_3')->textInput() ?>
        <!---->
        <!--    --><? //= $form->field($model, 'id_uni_accepted_4')->textInput() ?>
        <!---->
        <!--    --><? //= $form->field($model, 'id_uni_accepted_5')->textInput() ?>

        <!--    --><? //= $form->field($model, 'visa')->textInput(['maxlength' => true]) ?>
        <!---->
        <!--    --><? //= $form->field($model, 'datetime_visa')->textInput() ?>
        <!---->
        <!--    --><? //= $form->field($model, 'status_visa')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
