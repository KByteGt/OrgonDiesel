<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurbosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turbos', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)
                ->unique();
            $table->string('description');
            $table->string('model',15);
            $table->string('application')
                ->nullable();
            $table->string('year')
                ->nullable();
            $table->string('image')
                ->default('/products/default.jpg');
            $table->boolean('active')
                ->default(true);
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
        Schema::dropIfExists('turbos');
    }
}
