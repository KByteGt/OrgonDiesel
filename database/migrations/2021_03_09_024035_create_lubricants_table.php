<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLubricantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lubricants', function (Blueprint $table) {
            $table->id();
            $table->string('code',50)
                ->unique();
            $table->string('description',191);
            $table->string('presentation',191);
            $table->text('detail');
            $table->integer('category')
                ->default(0);
            $table->string('image',191)
                ->default('default.png');
            $table->string('datasheet',191)
                ->nullable();
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
        Schema::dropIfExists('lubricants');
    }
}
