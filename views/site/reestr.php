<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = "Реестратура";
if($med_id=='')
	$med_id="-1";

include_once 'header.php';
?>




    <div class="reestr" id="page">
        <div class="row doit">
            <p>Оберіть потрібного лікаря</p>
        </div>
        <div class="row">
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="<?=Url::to(['doctor', 'doc'=>'терапевт','med_id'=>$med_id ])?>">Терапевт</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="<?=Url::to(['doctor', 'doc'=>'семейный','med_id'=>$med_id ])?>">Сімейний лікар</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="<?=Url::to(['doctor', 'doc'=>'гастроэнтеролог','med_id'=>$med_id ])?>">Гастроентеролог</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="#">Кардіолог</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="#">Офтальмолог</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="#">Ревматолог</a>
	        </div>
    	</div>
	</div>

<?php include_once 'footer.php';?>