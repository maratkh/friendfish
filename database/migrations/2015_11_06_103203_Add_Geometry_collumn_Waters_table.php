<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGeometryCollumnWatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE waters  ADD COLUMN position geometry DEFAULT NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE waters DROP COLUMN position RESTRICT;');
    }
}
