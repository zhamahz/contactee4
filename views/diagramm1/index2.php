<?php

use yii\helpers\Html;
use yii\grid\GridView;
use sjaakp\gcharts\BarChart;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Diagramm1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отчеты по полученным заявлениям';
$this->params['breadcrumbs'][] = $this->title;
?>
<button type="button" class="btn btn-primary">Print</button>
<button type="button" class="btn btn-danger">PDF</button>
<button type="button" class="btn btn-success">Excel</button>


<br>
<br>
<div class="diagramm1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--    <p>-->
    <!--        --><?//= Html::a('Create Diagramm1', ['create'], ['class' => 'btn btn-success']) ?>
    <!--    </p>-->
    <br>
    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
           // 'accepted',
            //'rejected',
            //'sum',
            'accepted2',
            'rejected2',
            'sum2',
            //'data1',

            // ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
    <?= BarChart::widget([
        'height' => '400px',
        'dataProvider' => $dataProvider,
        'columns' => [
            'name:string',
            'sum2'
        ],
        'options' => [
            'title' => 'Общее количество полученных заявлений на визу'
        ],
    ]) ?>
</div>
