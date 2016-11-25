<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

// dodal sem class
use yii\helpers\ArrayHelper;
use app\models\Zaposleni;
use app\models\Zaloga;

// dodal sem za DatePicker
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Poslano */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poslano-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- dodal sem dropDownList -->
    <?= $form->field($model, 'zaposleni_id')->dropDownList(
	ArrayHelper::map(Zaposleni::find()->joinWith('poslanos')->orderBy('zaposleni.id')->all(), 'id', 'PolnoIme')
       ) 
    ?>
 
    <?= $form->field($model, 'zaloga_id')->dropDownList(
	ArrayHelper::map(Zaloga::find()->joinWith('poslanos')->orderBy('zaloga.id')->all(), 'id', 'Opis')
	)
    ?>

    <?= $form->field($model, 'Kolicina')->textInput() ?>

    <?= $form->field($model, 'Ostalo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poslano_dne')->widget(
    	DatePicker::className(), [
        // inline too, not bad
         'inline' => true, 
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
