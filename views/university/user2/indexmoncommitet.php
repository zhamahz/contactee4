<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\User2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'confirmation_token',
            //'status',
            //'superadmin',
            //'created_at',
            //'updated_at',
            //'registration_ip',
            //'bind_to_ip',
            //'email:email',
            //'email_confirmed:email',
            //'id_uni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
