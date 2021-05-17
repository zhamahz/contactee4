<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User2 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Приемная коммисия', 'url' => ['indexmoncommitet']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно уверены, что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key',
            'password_hash',
            'confirmation_token',
            'status',
            'superadmin',
            'created_at',
            'updated_at',
            'registration_ip',
            'bind_to_ip',
            'email:email',
            'email_confirmed:email',
            'id_uni',
        ],
    ]) ?>

</div>
