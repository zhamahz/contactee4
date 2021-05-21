<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\User4Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Списки приемной комиссии ВУЗов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user4-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a('Create User4', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            ['attribute' => 'username'],

            //'username',
           // 'auth_key',
            //'password_hash',
            //'confirmation_token',
            //'status',
            //'superadmin',
            //'created_at',
            //'updated_at',
            //'registration_ip',
            //'bind_to_ip',
            ['attribute' => 'email'],

           // 'email:email',
            //'email_confirmed:email',
            //'id_university',
            ['attribute' => 'uniName', 'value'=>'university.name', 'label'=>'ВУЗ'],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
