<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AbiturSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список всех заявлений на поступление в ВУЗ ';

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
            ['attribute' => 'univer2Name', 'value'=>'university.name', 'label'=>'ВУЗ'],
            ['attribute' => 'fullname'],
            ['attribute' => 'country2Name', 'value'=>'country.name', 'label'=>'Страна'],
            ['attribute' => 'programms2Name', 'value'=>'speciality.speciality', 'label'=>'Специальность'],
          //  ['attribute' => 'status2'],
            ['attribute' => 'status1'],
            ['attribute' => 'date1'],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
</div>
