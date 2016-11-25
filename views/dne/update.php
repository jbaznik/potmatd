<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dne */

$this->title = 'Update Dne: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dnes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dne-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
