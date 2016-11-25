<?php


use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'MDDSZ potrosni material 2016';
?>
<div class="site-index">

    <div class="body-content">
        <br>
        <div class="row">
			Vnesi ali urejaj obstojecega zaposlenega:
			<a href="<?php echo Yii::$app->urlManager->createUrl(['zaposleni/index']); ?>">upravljaj zaposlenega</a>
        </div>
	<br>
	<div class="row">
                        Vnesi nov toner ali kartuso:
       			<a href="<?php echo Yii::$app->urlManager->createUrl(['zaloga/index']); ?>">potrosni material</a>

	 </div>
        <br>  
	<div class="row">
		        Zabelezi, komu si poslal potrosni material:
	   	        <a href="<?php echo Yii::$app->urlManager->createUrl(['poslano/index']); ?>">poslano uporabniku</a>
        </div>

    </div>

</div>


