<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = "Терминал";
?>




    <div class="container reestr" id="page">
        <div class="row doit">
            <p>Медицинские учреждения Нежина</p>
        </div>
        <div class="row">
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="<?=Url::to(['fast' ])?>">Скорая помощь</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="<?=Url::to(['pol', 'hosp'=>'pol' ])?>">Поликлиники</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="<?=Url::to(['pol', 'hosp'=>'bol' ])?>">Больницы</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="arm-doctor.html">Дипансеры</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="arm-doctor.html">Санатории</a>
	        </div>
	        <div class="col-sm-4 box">
	            <a class="btn btn-success btn-block" href="arm-doctor.html">Аптеки</a>
	        </div>
    	</div>
	</div>

