<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('race_id')->nullable()->unsigned()->index();
            $table->foreign('race_id')->references('id')->on('races')->onDelete('cascade');
            $table->text('bio')->nullable();
      			$table->string('gender')->nullable();
      			$table->integer('age')->nullable();
            $table->boolean('dead')->default(0);
      			$table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('owner_name')->nullable();
            $table->string('owner_email')->nullable();
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
        Schema::dropIfExists('dogs');
    }
}
