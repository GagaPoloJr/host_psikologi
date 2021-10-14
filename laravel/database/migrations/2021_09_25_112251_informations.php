<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('informations', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('slug_title');
            $table->string('thumbnail');
            $table->text('body');
            $table->timestamps();
            $table->integer('id_kategori');
            $table->string('status');

            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
