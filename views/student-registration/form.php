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


    <?= $form->field($model, 'id_uni_accepted_1')->dropDownList([
        '0' => '',
        '1' => 'Принят',
        '2   ' => 'Отклонен',
    ]); ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
