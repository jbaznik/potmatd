<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PoslanoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poslano-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Kolicina') ?>

    <?= $form->field($model, 'Ostalo') ?>

    <?= $form->field($model, 'poslano_dne') ?>

    <?= $form->field($model, 'zaposleni_id') ?>

    <?php // echo $form->field($model, 'zaloga_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
