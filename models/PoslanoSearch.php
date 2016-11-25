<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Poslano;

/**
 * PoslanoSearch represents the model behind the search form about `app\models\Poslano`.
 */
class PoslanoSearch extends Poslano
{
    public $zaloga;
    public $zaposleni;	
   
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Kolicina', 'zaposleni_id', 'zaloga_id'], 'integer'],
            [['Ostalo', 'poslano_dne'], 'safe'],
            [['zaloga', 'zaposleni'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Poslano::find();

	// dodal sem relaciji tabeli zaloga in zaposleni
	$query->joinWith(['zaloga', 'zaposleni']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

	// dodal sem sortiranje
	$dataProvider->sort->attributes['zaloga'] = [
	 'asc' => ['zaloga.Opis' => SORT_ASC],
	 'desc' => ['zaloga.Opis' => SORT_DESC],
        ];

	
	// dodal sem sortiranje
	$dataProvider->sort->attributes['zaposleni'] = [
	 'asc' => ['zaposleni.PolnoIme' => SORT_ASC],
	 'desc' => ['zaposleni.PolnoIme' => SORT_DESC],
        ];
        
	$this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Kolicina' => $this->Kolicina,
            'poslano_dne' => $this->poslano_dne,
            'zaposleni_id' => $this->zaposleni_id,
            'zaloga_id' => $this->zaloga_id,
        ]);
	
	$query->andFilterWhere(['like', 'zaloga.Opis', $this->getAttribute('zaloga.Opis')])
	      ->andFilterWhere(['like', 'zaposleni.PolnoIme', $this->getAttribute('zaposleni.PolnoIme')])
              ->andFilterWhere(['like', 'Ostalo', $this->Ostalo]);

        return $dataProvider;
    }
}
