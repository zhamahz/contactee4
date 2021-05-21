    <?php

use yii\helpers\Html;
use yii\grid\GridView;
use sjaakp\gcharts\PieChart;
use yii\data\ActiveDataProvider;



/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список стран';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',

      ['class' => 'yii\grid\ActionColumn', 'template' => '{update}'],
        ],
    ]); ?>
    <?= PieChart::widget([
        'height' => '400px',
        'dataProvider' => $dataProvider,
        'columns' => [
            'name:string',
            'id'
        ],
        'options' => [
            'title' => 'Countries by Population'
        ],
    ]) ?>
</div>
