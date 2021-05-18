<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Place */

$this->title = "Тест";

\yii\web\YiiAsset::register($this);
?>
<div class="place-view">

<h1><?= Html::encode($this->title) ?></h1>

 <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Количество: <?= $query1 ?></th>
    </tr>
  </thead>
  <tbody>
	<?php  foreach($query as $t): ?>
			<tr>
				<td><?=$t->name;?></td>
			</tr>
	<?php endforeach;?>
  <tbody>
 </table>
