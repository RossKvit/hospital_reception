<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = "Доктора";

include_once 'header.php';
?>



  
   <div class="" id="page">
    <div class="row doit">
        <div class="col-sm-12">
             <p>Оберіть потрібного лікаря з категорії "<?=$doc?>"</p>
        </div>
       
    </div>
    <div class="row">
        <div class="col-sm-12">
    		<?php
    			if(isset($doctors) && is_array($doctors))
                	foreach ($doctors as $doctor): ?>        
                <!-- 	<div class="post">
                    	<p class="num">Имя доктора:
    					<a href="<?= Url::to(['booking', 'doc_id'=>$doctor->id ])?>">Записаться</a>	          
                    </p>
                   
                </div> -->

            <div class="col-sm-3 box ">
                <div class="doctor">
        	         <img class="img-responsive" alt="" src="<?=$doctor->img?>">
        	         <p><b><?=$doctor->name?></b></p>
        	         <p>Приймальний час:</p>
        	         <p><?=$doctor->work_time?></p>
        	         <p>Кабінет <?=$doctor->kab?></p>
        	         <a class="btn btn-success btn-block" href="<?= Url::to(['booking', 'doc_id'=>$doctor->id ])?>">Записатись</a>
             	</div>
            </div>
    		<?php  endforeach;   ?>
        </div>
 </div>

</div>
<?php include_once 'footer.php'; ?>