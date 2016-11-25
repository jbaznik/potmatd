<?php

use yii\helpers\Html;
// onemogoci
// use yii\grid\GridView;

// dodal sem
use kartik\grid\GridView;
use kartik\export\ExportMenu;

// za cookije
use cinghie\cookieconsent\widgets\CookieWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoslanoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poslanos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="poslano-index">

<?= CookieWidget::widget([ 
        'message' => 'This website uses cookies to ensure you get the best experience on our website.',
        'dismiss' => 'Got It',
        'learnMore' => 'More info',
        'link' => 'http://silktide.com/privacy-policy',
        'theme' => 'dark-bottom'
]); ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php

    $gridColumns = [
      //   'Kolicina',
      //   'Ostalo:ntext',
      //   'poslano_dne',
	      // dodal sem
	      [
		    'attribute' => 'zaposleni',
		    'value' => 'zaposleni.PolnoIme',
	      ],

	      // 'zaloga_id',
              [
		    'attribute' => 'zaloga',
		    'value' => 'zaloga.Opis',
	      ],

        // 'id',
        'Kolicina',
        'Ostalo:ntext',
        'poslano_dne',

     ];

    echo ExportMenu::widget([
         'dataProvider' => $dataProvider,
         'columns' => $gridColumns
        ]);
?>
    <p>
        <?= Html::a('Create Poslano', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

	      // dodal sem
	      [
		    'attribute' => 'zaposleni',
		    'value' => 'zaposleni.PolnoIme',
	      ],

	      // 'zaloga_id',
              [
		    'attribute' => 'zaloga',
		    'value' => 'zaloga.Opis',
	      ],

        // 'id',
        'Kolicina',
        'Ostalo:ntext',
        'poslano_dne',

	  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
