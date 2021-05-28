<?php

use yii\helpers\Html;
use yii\grid\GridView;
use sjaakp\gcharts\PieChart;
use sjaakp\gcharts\BarChart;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Diagramm1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Диаграммы';
$this->params['breadcrumbs'][] = $this->title;
?>

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
    <?= PieChart::widget([
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



    <?= PieChart::widget([
        'height' => '400px',
        'dataProvider' => $dataProvider,
        'columns' => [
            'name:string',
            'accepted2'
        ],
        'options' => [
            'title' => 'Принятые заявления на визу'
        ],
    ]) ?>

    <?= PieChart::widget([
        'height' => '400px',
        'dataProvider' => $dataProvider,
        'columns' => [
            'name:string',
            'rejected2'
        ],
        'options' => [
            'title' => 'Отклоненные заявления на визу'
        ],
    ]) ?>


</div>
