<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Zaposleni */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zaposlenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zaposleni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Priimek',
            'Ime',
            'Lokacija',
            'Soba',
            'Telefon',
            'Mobitel',
            'PolnoIme',
        ],
    ]) ?>

</div>
