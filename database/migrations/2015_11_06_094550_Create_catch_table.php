<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('catch_post')){
            Schema::create('catch_post', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->text('description');

                $table->integer('water_id');
                $table->integer("fishingtype_id");
                $table->integer("bait_id");
                $table->integer("privacylevel_id");
                $table->integer("user_id");
                $table->timestamp('catchdate');
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
        if(Schema::hasTable('catch_post')){
            Schema::drop('catch_post');
        }
    }
}
