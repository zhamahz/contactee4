<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\University */

$this->title = 'Создать новый ВУЗ';
$this->params['breadcrumbs'][] = ['label' => 'Universities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="university-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
