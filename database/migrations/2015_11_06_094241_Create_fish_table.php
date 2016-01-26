<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('fishs')){
            Schema::create('fishs', function(Blueprint $table){
                $table->increments('id');
                $table->integer('type_id');
                $table->string('name');
                $table->text('description');
                $table->binary('image');
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
        if(Schema::hasTable('fishs')){
            Schema::drop('fishs');
        }
    }
}
