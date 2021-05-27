<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentRegistration4Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список всех заявлений, полученных ВУЗами ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-registration4-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a('Create Student Registration4', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'id_user',
          //  'fullname',
            // 'gender',
            //   'birthday',
           // 'id_country',
            //'email:email',
            //'photo_passport',
            //'pdf_attestat',
            //'pdf_motivation',
           // 'id_uni_1',
          //  'id_program_1',
           // 'datetime_reg_1',
           // 'id_uni_2',
          //  'id_program_2',
           // 'datetime_reg_2',
           // 'id_uni_3',
          //  'id_program_3',
           // 'datetime_reg_3',
         //   'id_uni_4',
          //  'id_program_4',
          //  'datetime_reg_4',
           // 'id_uni_5',
           // 'id_program_5',
            //'datetime_reg_5',
//            'id_uni_accepted_1',
//            'id_uni_accepted_2',
//            'id_uni_accepted_3',
//            'id_uni_accepted_4',
//            'id_uni_accepted_5',
            //'visa',
            //'datetime_visa',
            //'status_visa:ntext',

          //  ['attribute' => 'fullname'],

            ['attribute' => 'country1Name', 'value'=>'country.name', 'label'=>'Страна'],

            ['attribute' => 'uni1Name', 'value'=>'uni1.name', 'label'=>'ВУЗ 1'],
            ['attribute' => 'uni2Name', 'value'=>'uni2.name', 'label'=>'ВУЗ 2'],
            ['attribute' => 'uni3Name', 'value'=>'uni3.name', 'label'=>'ВУЗ 3'],
            ['attribute' => 'uni4Name', 'value'=>'uni4.name', 'label'=>'ВУЗ 4'],
            ['attribute' => 'uni5Name', 'value'=>'uni5.name', 'label'=>'ВУЗ 5'],

            ['attribute' => 'uniAccepted1Name', 'value'=>'uniAccepted1.name', 'label'=>'Статус ВУЗа 1'],
            ['attribute' => 'uniAccepted2Name', 'value'=>'uniAccepted2.name', 'label'=>'Статус ВУЗа 1'],
            ['attribute' => 'uniAccepted3Name', 'value'=>'uniAccepted3.name', 'label'=>'Статус ВУЗа 1'],
            ['attribute' => 'uniAccepted4Name', 'value'=>'uniAccepted4.name', 'label'=>'Статус ВУЗа 1'],
            ['attribute' => 'uniAccepted5Name', 'value'=>'uniAccepted5.name', 'label'=>'Статус ВУЗа 1'],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>
</div>
