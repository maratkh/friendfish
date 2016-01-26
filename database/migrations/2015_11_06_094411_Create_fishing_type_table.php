<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFishingTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('fishingtypes')){
            Schema::create('fishingtypes', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->text('description');
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
        if(Schema::hasTable('fishingtypes')){
            Schema::drop('fishingtypes');
        }
    }
}
