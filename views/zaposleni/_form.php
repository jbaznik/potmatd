<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zaposleni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zaposleni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Priimek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lokacija')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Soba')->textInput() ?>

    <?= $form->field($model, 'Telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mobitel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PolnoIme')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
