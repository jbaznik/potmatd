<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZaposleniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zaposlenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zaposleni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Zaposleni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Priimek',
            'Ime',
            'Lokacija',
            'Soba',
            // 'Telefon',
            // 'Mobitel',
            // 'PolnoIme',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
