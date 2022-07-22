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
        Schema::create('NearEarthObject', function (Blueprint $table) {
            $table->id();
            $table->string('referenced'); // I wasn't sure what type of data this field should represent so I just make it string
            $table->string('name');
            $table->double('speed');
            $table->boolean('is_hazardous');
            $table->date('date');
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
        Schema::dropIfExists('NearEarthObject');
    }
};
