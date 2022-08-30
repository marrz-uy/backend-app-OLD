<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspectaculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espectaculos', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->id();
            $table->foreignId('puntosinteres_id')
            ->constrained('puntosinteres')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('artista')->nullable();
            $table->decimal('precio', 6, 2)->nullable()->default(0.00);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->set('Tipo',['Cine','Teatro','Carnaval','Futbol']);
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
        Schema::dropIfExists('espectaculos');
    }
}
