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
        Schema::table('images', function (Blueprint $table) {
            $table->string('category_name')->unsigned();
            $table->foreign('category_name')
                 ->references('name')->on('categories');

            $table->string('resolution_name')->unsigned();
            $table->foreign('resolution_name')
                 ->references('name')->on('resolutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign('images_category_id_foreign');
        });
    }
};
