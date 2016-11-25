<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zaloga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zaloga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sifra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KodaCPV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Naziv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Opis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'EnotaMere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kolicina')->textInput() ?>

    <?= $form->field($model, 'CenazDDVvEUR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ostalo')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
