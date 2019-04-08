
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

    	<div class="container" id="page">
    		<div class="row">
    			<h1>Поликлиники Нежина</h1>
    		</div>
    		
                <?php
                    if(isset($hospitals) && is_array($hospitals))
                        foreach ($hospitals as $hospital): ?>        
                        <div class="row info hosp">
                            <div class="col-sm-6">
                                <img class="img-responsive" alt="" src="<?=$hospital->img?>">
                            </div>
                            <div class="col-sm-6">
                                <h2><?=$hospital->name?></h2>
                                <p>Адрес: <?=$hospital->address?></p>
                                <p>Телефон: <?=$hospital->tel?></p>
                                <p>Время работы: <?=$hospital->work_time?></p>
                                <p>Врачи:</p>
                                <p>Терапевт</p>
                                <p>Семейный врач</p>
                                <p>Гастроэнтеролог</p>
                                <p>Кардиолог</p>
                                <a class="btn btn-success btn-block" href="<?=Url::to(['reestr', 'med_id'=>$hospital->id ]) ?>">Записаться на прием</a>
                            </div>
                        </div>
             
                <?php  endforeach;   ?>

    			
    		<div class="row">

    			<a class="btn btn-success btn-block home" href="<?=Url::to(['index']) ?>">На главную</a>

    		</div>
    	</div>

