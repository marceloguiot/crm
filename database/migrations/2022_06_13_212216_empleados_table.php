<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleados', function (Blueprint $tabla){
            $tabla->id();
            $tabla->string('nombre');
            $tabla->string('apellidos');
            $tabla->foreignId('company_id')->constrained('companies');
            $tabla->string('correo')->nullable();
            $tabla->string('telefono')->nullable();
            $tabla->timestamps();
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
        Schema::dropIfExists('empleados');
    }
}