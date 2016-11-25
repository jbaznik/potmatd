<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZaposleniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zaposleni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Priimek') ?>

    <?= $form->field($model, 'Ime') ?>

    <?= $form->field($model, 'Lokacija') ?>

    <?= $form->field($model, 'Soba') ?>

    <?php // echo $form->field($model, 'Telefon') ?>

    <?php // echo $form->field($model, 'Mobitel') ?>

    <?php // echo $form->field($model, 'PolnoIme') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
