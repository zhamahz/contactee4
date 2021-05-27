<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diagramm1 */

$this->title = 'Create Diagramm1';
$this->params['breadcrumbs'][] = ['label' => 'Diagramm1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagramm1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
