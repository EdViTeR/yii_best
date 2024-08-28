<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию</p>
<ul>
	<li><label>Name</label>: <?= HTML::encode($model->name) ?></li>
	<li><label>email</label>: <?= HTML::encode($model->email) ?></li>
</ul>