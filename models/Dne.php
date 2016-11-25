<?php

namespace app\models;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

use Yii;

/**
 * This is the model class for table "dne".
 *
 * @property integer $id
 * @property string $datum
 */
class Dne extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dne';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datum'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datum' => 'Datum',
        ];
    }

public function behaviors() { 

	return [ 
	[ 'class' => AttributeBehavior::className(),
	'attributes' => [ // update 1 attribute 'created' OR multiple attribute ['created','updated'] 
		ActiveRecord::EVENT_BEFORE_INSERT => ['datum'], 
		ActiveRecord::EVENT_BEFORE_UPDATE => 'datum', ], 
		'value' => function ($event) 
		{ return date('Y-m-d H:i:s', strtotime($this->datum)); 
		}, 
	], 
   ]; 
} 

}



