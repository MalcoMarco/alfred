<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaccions', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cuenta',34);
            $table->string('codigo_banco',17);
            $table->enum('tipo_cuenta',['CC','CA','TJ','PR']);
            $table->string('nombre_cliente',22);
            $table->enum('tipo_movimiento',['D',"C"]);
            $table->decimal('monto',$precision = 13, $scale = 2);
            $table->string('referencia',10)->nullable($value = true);
            $table->varchar('descripcion',80)->nullable($value = true);
            $table->tinyText('emails_beneficiario')->nullable($value = true);
            $table->string('fax_beneficiario',30)->nullable($value = true);
            $table->enum('tipo_id',['C',"R",'P']);
            $table->string('num_id',30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaccions');
    }
}
