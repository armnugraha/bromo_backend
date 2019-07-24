<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContohTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contoh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->integer('altitude')->nullable();
            $table->float('rank')->nullable();
            $table->string('img')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->text('desc')->nullable();
            $table->string('price')->nullable();
            $table->string('time')->nullable();
            $table->text('review_parrams')->nullable();
            $table->text('gallery')->nullable();
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
        Schema::dropIfExists('contoh');
    }
}
