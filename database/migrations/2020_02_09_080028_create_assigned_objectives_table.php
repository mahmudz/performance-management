<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignedObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_objectives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('objective_id');
            $table->integer('colleague_number')->comment('Employee ID');
            $table->string('name');
            $table->string('role');
            $table->string('division');
            $table->float('expected_score');
            $table->tinyInteger('status')->default(0)->comment('0 - Pending, 1 - Approved, 2 - Declined');
            $table->string('evidence')->nullable()->comment('Uploaded file path');
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
        Schema::dropIfExists('assigned_objectives');
    }
}
