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
            $table->string('code')
                ->unique();
            $table->string('description');
            $table->string('presentation');
            $table->text('detail');
            $table->foreignId('category')
                ->nullable()
                ->constrained('product_category')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('image')
                ->default('default.png');
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
