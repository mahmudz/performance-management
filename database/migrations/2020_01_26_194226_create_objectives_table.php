<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by');
            $table->boolean('type')->default(false);
            $table->integer('colleague_number')->nullable();
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->string('division')->nullable();
            $table->string('title');
            $table->text('personal_objective');
            $table->float('current_score');
            $table->float('target_score');
            $table->date('date_to_be_achived');
            $table->text('key_results')->comment('Should be json array');
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
        Schema::dropIfExists('objectives');
    }
}
