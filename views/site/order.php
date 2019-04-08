<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<?php include_once 'header.php'; ?>


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
               <p class="doit">Введите ваше имя</p>
               <div class="row">
               		<?php $form = ActiveForm::begin(); ?>
				       <div class="col-sm-8 name_input">
	                   		<?= $form->field($order, 'name')->textInput()->label(false); ?>
	                      <!-- <input name="name" class="order" type="text" placeholder="Введите Ваше имя здесь">  -->  
	                  </div>
	                  <div class="col-sm-4 order">
	                  		<?= Html::submitButton('Відправити', ['class' => 'btn btn-success btn-block']) ?>
	                     <!--  <a class="btn btn-success btn-block" href="recept.html">Получить талончик</a>   -->  
	                  </div>
                  <?php ActiveForm::end(); ?>
              </div>

        </div>
    </div>
</div>
</div>
<div class="container">
<?php include_once 'footer.php'; ?>
</div>