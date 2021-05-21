<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 7]) ?>

<!--    --><?//= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file',
        ['options' => ['tag' => false]])->textInput(['type' => 'file']) ?>

    <!--    --><?//= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
