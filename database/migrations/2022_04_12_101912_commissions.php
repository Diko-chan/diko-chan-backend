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
        Schema::create('commissions', function (Blueprint $table){
            $table->id();
            $table->string('com_name', 63);
            $table->tinyInteger('com_age');
            $table->string('com_gender', 63);
            $table->text('com_details', 63);
            $table->string('com_image', 63)->nullable(true);
            $table->boolean('com_status');
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
        Schema::dropIfExists('commissions');
    }
};
