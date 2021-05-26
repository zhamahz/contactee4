<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AbiturSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abiturs';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abitur-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!---->
<!--    <p>-->
<!--        --><?//= Html::a('Create Abitur', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'id_university',
            //'fullname',
            //'id_country',
           // 'id_speciality',
            //'status1',
            //'date1',
            //'status2',
            //'date2',
            //'dop',
            ['attribute' => 'univerName', 'value'=>'university.name', 'label'=>'ВУЗ'],
            ['attribute' => 'fullname'],
            ['attribute' => 'countryName', 'value'=>'country.name', 'label'=>'Страна'],
            ['attribute' => 'programmsName', 'value'=>'speciality.speciality', 'label'=>'Специальность'],
            ['attribute' => 'status1'],
            ['attribute' => 'date1'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
