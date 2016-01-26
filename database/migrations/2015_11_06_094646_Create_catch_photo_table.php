<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatchPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('postphoto')){
            Schema::create('postphoto', function(Blueprint $table){
                $table->increments('id');
                $table->integer('catch_id');
                $table->string('name');
                $table->text('description');
                $table->string('photo');
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
        if(Schema::hasTable('postphoto')){
            Schema::drop('postphoto');
        }
    }
}
