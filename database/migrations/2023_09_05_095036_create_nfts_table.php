<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('artist');
            $table->string('owner')->nullable();
            $table->enum('category', ['collectible', 'metaverse', 'utility', 'online video game']);
            $table->text('description', 255);
            $table->string('contractUrl')->unique();
            $table->enum('token', ['ERC-721', 'ERC-1155', 'ERC-998']);
            $table->decimal('price',8,2);
            $table->string('image');
            $table->timestamps();

            $table->foreign('owner')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nft');
    }
}
