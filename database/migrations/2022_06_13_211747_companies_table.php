<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CREAR LA TABLA DE COMPAÑIAS
        Schema::create('companies', function (Blueprint $tabla){
                $tabla->id();
                $tabla->string('nombre');
                $tabla->string('correo')->nullable();
                $tabla->string('logo')->nullable();
                $tabla->string('pagina')->nullable();
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
        Schema::dropIfExists('companies');
        
    }
}
