<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = $doc->prof;
include_once 'header.php';
?>


     <div class="container" id="page">
        <div class="row">
           <div class="col-sm-3 box booking-info">

               <h2 class="name"><span><?= $doc->prof?></span><br><?= $doc->name?></h2>
               <img class="img-responsive img_margin" alt="" src="<?= $doc->img?>">
               <p>Приймальні години:</p>
               <p><?= $doc->work_time?></p>
               <p>Кабінет <?= $doc->kab?></p>
               <hr>
               <img class="img-responsive" alt="" src="<?= $hospital->img?>">
               <h2 class="name"><?= $hospital->name?></h2>
               <p>Адреса: <?= $hospital->address?></p>
               <p>Телефон: <?= $hospital->tel?></p>
               <p>Горафік роботи: <?= $hospital->work_time?></p>
           </div>
           <div class="col-sm-9">
               <p class="doit">Оберіть час прийому:</p>
	
               <div class="col-sm-6 box booking">
               		<?php
						if ($doc->t9 != 0){
						echo Html::tag('a', '9:00', ['class' => 'btn btn-success btn-block btn-my', 'disabled' => 'disabled']);
						}else{
						echo Html::tag('a', Html::encode('9:00'), ['href' => Url::to(['order', 'doc_id'=>$doc->id, 'time'=>'t9' ]),
								'class' => 'btn btn-success btn-block btn-my'
								]);
						}
						if ($doc->t10 != 0){
						echo Html::tag('a', '10:00', ['class' => 'btn btn-success btn-block btn-my' , 'disabled' => 'disabled' ]);
						}else{
						echo Html::tag('a', Html::encode('10:00'), ['href' => Url::to(['order', 'doc_id'=>$doc->id , 'time'=>'t10']),'class' => 'btn btn-success btn-block btn-my'

								]);
						}						
					?>
                  <!-- <a class="btn btn-success btn-block" href="order.html">9.00</a>
                  <a class="btn btn-success btn-block" href="order.html">9.30</a>
                  <a class="btn btn-success btn-block" href="order.html">10.00</a>
                  <a class="btn btn-success btn-block" href="order.html">10.30</a>
                  <a class="btn btn-success btn-block" href="order.html">11.00</a> -->
              </div>
              <div class="col-sm-6 box booking">
              <?php
						if ($doc->t11 != 0){
						echo Html::tag('a', '11:00', ['class' => 'btn btn-success btn-block btn-my', 'disabled' => 'disabled']);
						}else{
						echo Html::tag('a', Html::encode('11:00'), ['href' => Url::to(['order', 'doc_id'=>$doc->id , 'time'=>'t11' ]),
								'class' => 'btn btn-success btn-block btn-my'
								]);
						}
						if ($doc->t12 != 0){
						echo Html::tag('a', '12:00', ['class' => 'btn btn-success btn-block btn-my' , 'disabled' => 'disabled' ]);
						}else{
						echo Html::tag('a', Html::encode('12:00'), ['href' => Url::to(['order', 'doc_id'=>$doc->id , 'time'=>'t12' ]),'class' => 'btn btn-success btn-block btn-my'

								]);
						}						
					?>

           </div>

       </div>
   </div>
</div>


<?php include_once 'footer.php'; ?>


