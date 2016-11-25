<?php

use yii\helpers\Html;
// ne bom rabil
// use yii\grid\GridView;

use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZalogaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zalogas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zaloga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php

    $gridColumns = [
	    'id',
	    'Sifra',
	    'KodaCPV',
	    'Naziv',
	    'Opis:ntext',
	    'Kolicina',

    ];	    

    echo ExportMenu::widget([
	'dataProvider' => $dataProvider,
	'columns' => $gridColumns
    ]);	    
?>

    <p>
        <?= Html::a('Create Zaloga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Sifra',
            'KodaCPV',
            'Naziv',
            'Opis:ntext',
            // 'EnotaMere',
            'Kolicina',
            // 'CenazDDVvEUR',
            // 'Ostalo:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
