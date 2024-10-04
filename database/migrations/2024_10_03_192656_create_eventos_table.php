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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->integer('dia');
            $table->string('mes', 3);
            $table->integer('año');
            $table->string('hora', 5);
            $table->string('lugar', 50);
            $table->foreignId('id_usuario')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('servicio', 120);
            $table->integer('precio_paquete');
            $table->integer('apartado');
            $table->integer('segundo_pago')->nullable();
            $table->integer('tercer_pago')->nullable();
            $table->string('firma', 100);
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
        Schema::dropIfExists('eventos');
    }
};
