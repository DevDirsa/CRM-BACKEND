<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->string('person_id');
            $table->string('loan_application_id');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('job_type');
            $table->string('local_due_date');
            $table->string('disbursement_date');
            $table->integer('days_past_due');
            $table->string('dpd_bucket');
            $table->integer('loan_number');
            $table->integer('loan_amount');
            $table->integer('interest_amount');
            $table->integer('pay_off_amount');
            $table->string('last_repayment_date');
            $table->string('descuento_total');
            $table->string('descuento');
            $table->string('minimo_a_pagar');
            $table->string('tel_limpio');
            $table->string('fecha_gestion');
            $table->string('hora_gestion');
            $table->string('nombre_del_agente');
            $table->string('usuario_del_agente');
            $table->string('accion');
            $table->string('dictamen');
            $table->string('subdictamen');
            $table->string('fecha_pp');
            $table->string('monto_pp');
            $table->integer('prioridad');
            $table->integer('de_gestiones');
            $table->integer('de_promesas');
            $table->string('fecha_de_ultima_promesa');
            $table->integer('monto_de_ultima_promesa');
            $table->integer('user_id');
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
        Schema::dropIfExists('management');
    }
}
