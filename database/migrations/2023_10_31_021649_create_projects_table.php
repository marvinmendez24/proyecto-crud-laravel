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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProyecto');
            $table->string('fuenteFondos');
            $table->decimal('montoPlanificado', $precision = 10, $scale = 2);
            $table->decimal('montoPatrocinado', $precision = 10, $scale = 2);
            $table->decimal('montoFondosPropios', $precision = 10, $scale = 2);
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
        Schema::dropIfExists('projects');
    }
};
