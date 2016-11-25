<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zaposleni".
 *
 * @property integer $id
 * @property string $Priimek
 * @property string $Ime
 * @property string $Lokacija
 * @property integer $Soba
 * @property string $Telefon
 * @property string $Mobitel
 * @property string $PolnoIme
 *
 * @property Poslano[] $poslanos
 */
class Zaposleni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zaposleni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Priimek', 'Ime'], 'required'],
            [['Soba'], 'integer'],
            [['Priimek', 'Ime', 'Lokacija', 'Telefon', 'Mobitel', 'PolnoIme'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Priimek' => 'Priimek',
            'Ime' => 'Ime',
            'Lokacija' => 'Lokacija',
            'Soba' => 'Soba',
            'Telefon' => 'Telefon',
            'Mobitel' => 'Mobitel',
            'PolnoIme' => 'Polno ime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoslanos()
    {
        return $this->hasMany(Poslano::className(), ['zaposleni_id' => 'id']);
    }
}
