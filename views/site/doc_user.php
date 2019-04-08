<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = "Личный кабинет доктора";

?>



  
   <div class="container doctor" id="page">
    <div class="row doit">
        <p>Выберите нужного <?=$doc?>а</p>
    </div>
    <div class="row">
		<?php
			if(isset($doctors) && is_array($doctors))
            	foreach ($doctors as $doctor): ?>        
            <!-- 	<div class="post">
                	<p class="num">Имя доктора:
					<a href="<?= Url::to(['booking', 'doc_id'=>$doctor->id ])?>">Записаться</a>	          
                </p>
               
            </div> -->

        <div class="col-sm-3 box doctor">
	         <img class="img-responsive" alt="" src="<?=$doctor->img?>">
	         <p><?=$doctor->name?></p>
	         <p>Время приема:</p>
	         <p><?=$doctor->work_time?></p>
	         <p>Кабинет <?=$doctor->kab?></p>
	         
     	</div>
		<?php  endforeach;   ?>
 </div>
 <br>
 <br>
 <br>
 <div class="row">
     <div class="col-sm-4 box">
         <a class="btn btn-success btn-block" href="<?=Url::to(['reestr'])?>">&lt; Вернуться назад</a>
     </div>
     <div class="col-sm-4 box">
        <a class="btn btn-success btn-block" href="<?=Url::to(['index'])?>">@ На Главную</a>
    </div>

</div>

</div>