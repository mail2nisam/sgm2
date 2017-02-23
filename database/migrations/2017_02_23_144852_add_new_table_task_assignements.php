<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewTableTaskAssignements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_manager', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id');
            $table->integer('assigned_to');
            $table->boolean('current_assignee');
            $table->text('reason');
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
        Schema::drop('task_manager');
    }
}
