<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_categorie', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("article_id");
            $table->foreign("article_id")->references("id")->on("articles");

            $table->unsignedBigInteger("categorie_id")->nullable();
            $table->foreign("categorie_id")->references("id")->on("categories")->onDelete("set null");

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
        Schema::dropIfExists('article_categorie');
    }
}
