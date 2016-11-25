<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zaloga */

$this->title = 'Create Zaloga';
$this->params['breadcrumbs'][] = ['label' => 'Zalogas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zaloga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
