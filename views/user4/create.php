<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User4 */

$this->title = 'Создать Приемную комиссию';
$this->params['breadcrumbs'][] = ['label' => 'User4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
