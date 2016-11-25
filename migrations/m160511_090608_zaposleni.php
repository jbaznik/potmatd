<?php

use yii\db\Migration;
use yii\db\Schema;


class m160511_090608_zaposleni extends Migration
{
    public function up()
    {
	$this->createTable('zaposleni', [
            'id' => Schema::TYPE_PK,
            'Priimek' => Schema::TYPE_STRING . ' NOT NULL',
            'Ime' => Schema::TYPE_STRING . ' NOT NULL',
            'Lokacija' => Schema::TYPE_STRING . ' NOT NULL',
            'Soba' => Schema::TYPE_INTEGER . ' NOT NULL',
  	    'Telefon' => Schema::TYPE_STRING . ' NOT NULL',
	    'Mobitel' => Schema::TYPE_STRING . ' NOT NULL'		
        ]);
    }

    public function down()
    {
         $this->dropTable('zaposleni');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
