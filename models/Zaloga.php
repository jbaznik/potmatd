<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zaloga".
 *
 * @property integer $id
 * @property string $Sifra
 * @property string $KodaCPV
 * @property string $Naziv
 * @property string $Opis
 * @property string $EnotaMere
 * @property integer $Kolicina
 * @property string $CenazDDVvEUR
 * @property string $Ostalo
 *
 * @property Poslano[] $poslanos
 */
class Zaloga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zaloga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Opis'], 'required'],
            [['Opis', 'Ostalo'], 'string'],
            [['Kolicina'], 'integer'],
            [['CenazDDVvEUR'], 'number'],
            [['Sifra', 'KodaCPV', 'Naziv', 'EnotaMere'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Sifra' => 'Sifra',
            'KodaCPV' => 'Koda CPV',
            'Naziv' => 'Naziv',
            'Opis' => 'Opis',
            'EnotaMere' => 'Enota Mere',
            'Kolicina' => 'Kolicina',
            'CenazDDVvEUR' => 'Cena z DDV v Eur',
            'Ostalo' => 'Ostalo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoslanos()
    {
        return $this->hasMany(Poslano::className(), ['zaloga_id' => 'id']);
    }
}
