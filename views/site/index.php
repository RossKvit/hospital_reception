<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Реєстратура';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Реєстратура'
]);

include_once 'header.php';
?>

    
        <div class="block slider-postion">

            <div class="next_but"> < </div>

            <div id="home_slider" class="home_slider">
                
                <div class="slider_item">
                    <div class="slider_image" style="background: url(/../../images/doc/doctors.jpg)"></div>
                    <p class="text">Професійні лікарі</p>
                </div>

                <div class="slider_item">
                    <div class="slider_image" style="background: url(/../../images/equipment.jpg)"></div>
                    <p class="text">Сучасне обладнення</p>
                </div>

               <!--  <div class="slider_item">
                    <div class="slider_image" style="background: url(/../../images/doc/doctors.jpg)"></div>
                    <p class="text">2Професійні лікарі</p>
                </div>   -->              
            </div>

            <div class="prev_but"> > </div>                                              
        </div>
   

    <div class="block index-content shadow_block" id="page">
        <div class="row">
            <div class="col-sm-12">
                <h1> Оберіть спосіб реєстрації </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-lg-offset-2 box">
                <a class="btn btn-success btn-block blue_btn" href="<?=Url::to(['hospital']) ?>">Обрати поліклініку</a>
            </div>
            <div class="col-sm-4 box">
                <a class="btn btn-success btn-block blue_btn" href="<?=Url::to(['reestr']) ?>">Обрати лікаря</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text_block">
                <h2>Як користуватись онлайн реєстратурою?</h2>

                <p>Онлайн реєстратура - це електронний запис на прийом до лікаря. Запис проводиться пацієнтом самостійно, без участі медичних працівників, через Інтернет.</p>
                
                <p><b>Передбачена наступна схема роботи:</b><p>
                <ul>                
                    <li>Адміністратор або відповідальна особа медичного закладу визначають перелік лікарів, запис на прийом до яких дозволена через Інтернет.</li>
                    <li>Пацієнт у зручний для себе час через web-сайт записується на прийом до лікаря. При наявності принтера роздруковує талон.</li>
                    <li>Факт записи пацієнта на прийом відображається на робочих місцях реєстраторів і інших співробітників медичного закладу. Реєстратор, до приходу пацієнта, роздруковує талон, знаходить і передає лікарю амбулаторну карту.</li>
                    <li>У призначений час пацієнт приходить в кабінет лікаря, минаючи реєстратуру.</li>
                </ul>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-4 col-lg-offset-2 box">
                <a class="btn btn-success btn-block" href="arm-cabinet.html">Кабинет</a>
            </div>
            <div class="col-sm-4 box">
            <a class="btn btn-success btn-block" href="#">&gt;</a>
            </div>
        </div> -->
        
    </div>
<?php include_once 'footer.php'; ?>
