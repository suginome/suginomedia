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
    Schema::create('foodstuffs', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('item_name');
        $table->integer('item_number');
        $table->integer('item_amount');
        $table->date('published');
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
        Schema::dropIfExists('foodstuffs');
    }
};
