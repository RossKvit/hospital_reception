<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<header>
		<div class="logo">
			<a href="<?=Url::to(['index'])?>"><img src="/../../images/logo.png" alt=""></a>
			<p>Онлайн<br>реєстратура</p>
		</div>
		<div id="menu">
			<ul>
				<li><a href="">Отримати онлайн консультацію</a></li>
				<li><a href="">Новини</a></li>
				<li><a href="">Про нас</a></li>
			</ul>	
		</div>
</header>