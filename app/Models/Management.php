<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'loan_application_id',
        'full_name',
        'phone_number',
        'job_type',
        'local_due_date',
        'disbursement_date',
        'days_past_due',
        'dpd_bucket',
        'loan_number',
        'loan_amount',
        'interest_amount',
        'pay_off_amount',
        'last_repayment_date',
        'descuento_total',
        'descuento',
        'minimo_a_pagar',
        'tel_limpio',
        'fecha_gestion',
        'hora_gestion',
        'nombre_del_agente',
        'usuario_del_agente',
        'accion',
        'dictamen',
        'subdictamen',
        'fecha_pp',
        'monto_pp',
        'prioridad',
        'de_gestiones',
        'de_promesas',
        'fecha_de_ultima_promesa',
        'monto_de_ultima_promesa',
        'user_id',
    ];


                
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
}
