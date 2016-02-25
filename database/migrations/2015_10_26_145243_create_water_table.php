<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('waters')){
            Schema::create('waters', function(Blueprint $table){
                $table->increments('id');
                $table->integer('watertypeid');
                $table->string('name');
                $table->text('description');
                $table->integer('region_id');
                $table->timestamps();


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
        if(Schema::hasTable('waters')){
            Schema::drop('waters');
        }
    }

}
