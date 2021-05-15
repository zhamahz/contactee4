<?php
use  yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Министерство образования и науки Кыргызской Республики';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Welcome!</h3>

        <p class="lead">Министерство образования и науки Кыргызской Республики</p>

        <p><?= Html::a('Поиск документов', ['/site/search'], ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Текст1</h2>

                <p>ntrcn ntrcn ntrcn</p>

                <p> <?= Html::a('Кнопка1 &raquo;', ['/diploms/index'], ['class' => 'btn btn-default']) ?> </p>
            </div>
            <div class="col-lg-4">
                <h2>Текст2</h2>

                <p>ntrcn ntrcn ntrcn</p>

                <p> <?= Html::a('Кнопка2 &raquo;', ['/attestats/index'], ['class' => 'btn btn-default']) ?> </p>
            </div>
            <div class="col-lg-4">
                <h2>Текст3</h2>

                <p>ntrcn ntrcn ntrcn</p>

                <p> <?= Html::a('Кнопка3 &raquo;', ['/svids/index'], ['class' => 'btn btn-default']) ?> </p>
            </div>
        </div>

    </div>
</div>
