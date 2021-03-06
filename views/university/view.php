<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\University */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Список всех ВУЗов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="university-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'id',
//            'id_user',
            'fullname',
            'gender',
            'birthday',
            'id_country',
            'email:email',
//            'photo_passport',
//            'pdf_attestat',
//            'pdf_motivation',
            'id_uni_1',
            'id_program_1',
            'datetime_reg_1',
//            'id_uni_2',
//            'id_program_2',
//            'datetime_reg_2',
//            'id_uni_3',
//            'id_program_3',
//            'datetime_reg_3',
//            'id_uni_4',
//            'id_program_4',
//            'datetime_reg_4',
//            'id_uni_5',
//            'id_program_5',
//            'datetime_reg_5',
            //'id_uni_accepted_1',
            //'id_uni_accepted_2',
            //'id_uni_accepted_3',
            //'id_uni_accepted_4',
            //'id_uni_accepted_5',
            //'visa',
            //'datetime_visa',
            'status_visa',
        ],
    ]) ?>

</div>
