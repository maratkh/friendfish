<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterfishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('water_fish')){
            Schema::create('water_fish', function(Blueprint $table){
                $table->integer('water_id');
                $table->integer('fish_id');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('water_fish')){
            Schema::drop('water_fish');
        }
    }
}
