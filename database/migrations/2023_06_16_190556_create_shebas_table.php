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
        Schema::create('shebas', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable();
            $table->string('sheba_name')->nullable();
            $table->string('shabe_version')->nullable();
            $table->string('sheba_image')->nullable();
            $table->string('sheba_price')->nullable();
            $table->string('sheba_file')->nullable();
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
        Schema::dropIfExists('shebas');
    }
};
