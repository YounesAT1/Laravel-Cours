<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
      public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id('idproduit');
            $table->bigInteger('idcategorie')->unsigned();  
            $table->foreign('idcategorie')->references('idcategorie')->on('categories');
            $table->string('nom');
            $table->decimal('prix', 8, 2);
            $table->integer('quantiteStock');
            $table->string('marque')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}