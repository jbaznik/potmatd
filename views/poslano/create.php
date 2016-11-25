<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Poslano */

$this->title = 'Create Poslano';
$this->params['breadcrumbs'][] = ['label' => 'Poslanos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poslano-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
