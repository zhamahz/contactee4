<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User2 */

$this->title = 'Создать приемную комиссию';
$this->params['breadcrumbs'][] = ['label' => 'Приемная комиссия', 'url' => ['indexmoncommitet']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
