<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User3 */

$this->title = 'Create User3';
$this->params['breadcrumbs'][] = ['label' => 'User3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
