<?php

namespace app\models;
// dodal sem
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

use Yii;

/**
 * This is the model class for table "poslano".
 *
 * @property integer $id
 * @property integer $Kolicina
 * @property string $Ostalo
 * @property string $poslano_dne
 * @property integer $zaposleni_id
 * @property integer $zaloga_id
 *
 * @property Zaloga $zaloga
 * @property Zaposleni $zaposleni
 */
class Poslano extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poslano';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kolicina', 'zaposleni_id', 'zaloga_id'], 'integer'],
            [['Ostalo'], 'string'],
            [['poslano_dne', 'zaposleni_id', 'zaloga_id'], 'required'],
            [['poslano_dne'], 'safe'],
            [['zaloga_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zaloga::className(), 'targetAttribute' => ['zaloga_id' => 'id']],
            [['zaposleni_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zaposleni::className(), 'targetAttribute' => ['zaposleni_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Kolicina' => 'Kolicina',
            'Ostalo' => 'Ostalo',
            'poslano_dne' => 'Poslano dne',
            'zaposleni_id' => 'Zaposleni ID',
            'zaloga_id' => 'Zaloga ID',
        ];
    }

    // dodal sem za vpis datuma v tabelo
    public function behaviors() {
	
	return [
		[ 'class' => AttributeBehavior::className(),
		  'attributes' => [
			ActiveRecord::EVENT_BEFORE_INSERT => ['poslano_dne'],
			ActiveRecord::EVENT_BEFORE_UPDATE => 'poslano_dne',
		   ],
	           'value' => function($event) {
				return date('Y-m-d H:i:s', strtotime($this->poslano_dne));
                   },   
	        ],
             ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZaloga()
    {
        return $this->hasOne(Zaloga::className(), ['id' => 'zaloga_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZaposleni()
    {
        return $this->hasOne(Zaposleni::className(), ['id' => 'zaposleni_id']);
    }
}
