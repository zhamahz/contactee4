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

    <p>
        <?= Html::a('Create Abitur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fullname',
            'id_university',
            'id_country',
            'id_speciality',
            //'status1',
            //'status2',
            //'dop',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
