<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();           
            $table->string('title');
            $table->text('detail');
            $table->boolean('state')->default(false);
            $table->foreignId('user_id')
              ->constrained()
              ->onDelete('cascade')
              ->onUpdate('cascade');
             $table->foreignId('status_id')
              ->constrained()
              ->onDelete('cascade')
              ->onUpdate('cascade');
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
        Schema::dropIfExists('tasks');
    }
};
