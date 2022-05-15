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
        Schema::disableForeignKeyConstraints();
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->integer('total');
            $table->integer('delai_livraison');
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('article_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('modepayment_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('statutcommande_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
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
        Schema::dropIfExists('commandes');
    }
};
