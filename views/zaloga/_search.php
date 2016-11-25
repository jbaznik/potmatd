<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZalogaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zaloga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Sifra') ?>

    <?= $form->field($model, 'KodaCPV') ?>

    <?= $form->field($model, 'Naziv') ?>

    <?= $form->field($model, 'Opis') ?>

    <?php // echo $form->field($model, 'EnotaMere') ?>

    <?php // echo $form->field($model, 'Kolicina') ?>

    <?php // echo $form->field($model, 'CenazDDVvEUR') ?>

    <?php // echo $form->field($model, 'Ostalo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
