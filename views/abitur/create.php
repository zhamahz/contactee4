<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Abitur */

$this->title = 'Create Abitur';
$this->params['breadcrumbs'][] = ['label' => 'Abiturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abitur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
