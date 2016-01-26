<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFishTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('fishtypes')){
            Schema::create('fishtypes', function(Blueprint $table){
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
        if(Schema::hasTable('fishtypes')){
            Schema::drop('fishtypes');
        }
    }
}
