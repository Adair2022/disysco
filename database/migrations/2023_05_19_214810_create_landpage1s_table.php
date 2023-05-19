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
        Schema::create('landpage1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string("nombre",60);
            $table->string("email");
            $table->string("telefono");
            $table->string("asunto");
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
        Schema::dropIfExists('landpage1s');
    }
};
