<?php

use yii\db\Schema;
use yii\db\Migration;

class m160506_131032_zaloga extends Migration
{
    public function up()
    {
	    $this->createTable('zaloga', [
            'id' => Schema::TYPE_PK,
            'Sifra' => Schema::TYPE_STRING . ' NOT NULL',
	    'KodaCPV' => Schema::TYPE_STRING . ' NOT NULL',
	    'Naziv' => Schema::TYPE_STRING . ' NOT NULL',
            'Opis' => Schema::TYPE_TEXT,
            'EnotaMere' => Schema::TYPE_STRING . ' NOT NULL',
	    'Kolicina' => Schema::TYPE_INTEGER . ' NOT NULL',
	    'CenazDDVvEUR' => Schema::TYPE_DECIMAL . ' NOT NULL',
	    'Ostalo' => Schema::TYPE_TEXT
	]);
    }

    public function down()
    {
        $this->dropTable('zaloga');

       
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
