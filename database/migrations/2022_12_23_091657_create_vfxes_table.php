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
        Schema::create('vfxes', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->integer("cpuUsage");
            $table->unsignedBigInteger("sample_id");
            $table->timestamps();

            $table->foreign('sample_id')->references('id')->on('samples');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vfxes');
    }
};
