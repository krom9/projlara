<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ask_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('checked');
            $table->timestamps();
        });

        Schema::table('ask_user', function (Blueprint $table) {
            $table->foreign('ask_id')
                ->references('id')
                ->on('asks')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ask_user');
    }
}
