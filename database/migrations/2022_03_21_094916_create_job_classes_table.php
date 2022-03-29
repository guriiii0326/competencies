<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('job_classes', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('job_classes');
        Schema::table('job_classes', function(Blueprint $table){
            $table->dropColumn('title', 'category');
        });
    }
}
