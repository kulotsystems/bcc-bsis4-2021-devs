<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGroupingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupings', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedTinyInteger('group_id');
            $table->unsignedTinyInteger('student_id');
            $table->enum('role', ['Leader', 'Developer', 'Researcher']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupings');
    }
};
