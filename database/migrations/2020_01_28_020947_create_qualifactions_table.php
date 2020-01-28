<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualifactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('level')->nullable();
            $table->string('faculty')->nullable();
            $table->date('started_year')->nullable();
            $table->date('end_year')->nullable();
            $table->string('division')->nullable();
            $table->boolean('status')->deafult(0);
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
        Schema::dropIfExists('qualifactions');
    }
}
