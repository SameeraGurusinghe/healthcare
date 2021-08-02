<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderconformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderconforms', function (Blueprint $table) {
            $table->id();

            $table->string("email")->nullable();
            $table->string("cusid")->nullable();        
            $table->string("tcharge")->nullable();
            $table->string("dliverdate")->nullable();
            $table->string("comment")->nullable();
            
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
        Schema::dropIfExists('orderconforms');
    }
}
