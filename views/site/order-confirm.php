<?php
use yii\helpers\Html;
?>
    	<div class="recept">
    		<h3>Талон на прием к врачу:</h3>
    		<p><?=$doc->prof?> - <?=$doc->name?> <br>
    			кабинет <?=$doc->kab?> <br>
    			время приема - <?=$time?>
    		</p>
    		<p>
    			Пациент : <?= Html::encode($order->name) ?>
    		</p>
    		<hr>
    		<p><?=$hospital->name?></p>
    		<p>Адрес: <?=$hospital->address?></p>
    		<p>Телефон: <?=$hospital->tel?></p>
    		<p>Время работы: <?=$hospital->work_time?></p>
    	</div>
