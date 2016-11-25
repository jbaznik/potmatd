<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zaposleni */

$this->title = 'Create Zaposleni';
$this->params['breadcrumbs'][] = ['label' => 'Zaposlenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zaposleni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
