<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

// MODELS
use App\Models\Management;

class ManagementController extends Controller
{

    public function index()
    {
        $management = Management::orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => 'success',
            'msg' => 'Datos obtenidos correctamente.',
            'data' => $management
        ]);
    }

    public function create(Request $request)
    {

        $data = $request['data'];

        foreach ($data as  $value) {
            Management::create([
                'person_id' => $value[0],
                'loan_application_id'   => $value[1],
                'full_name' => $value[2],
                'phone_number'  => $value[3],
                'job_type'  => $value[4],
                'local_due_date'    => ($value[5]  != '--') ? Carbon::createFromFormat('Y-m-d', '1900-01-01')
                    ->addDays($value[5] - 2) // Restar 1 porque Excel cuenta desde el 1 de enero de 1900
                    ->format('m/d/y') : '',
                'disbursement_date' => ($value[6]  != '--') ? Carbon::createFromFormat('Y-m-d', '1900-01-01')
                    ->addDays($value[6] - 2) // Restar 1 porque Excel cuenta desde el 1 de enero de 1900
                    ->format('m/d/y') : '',
                'days_past_due' => $value[7],
                'dpd_bucket'    => $value[8],
                'loan_number'   => $value[9],
                'loan_amount'   => $value[10],
                'interest_amount'   => $value[11],
                'pay_off_amount'    => $value[12],
                'last_repayment_date'   => ($value[13]  != '--') ? Carbon::createFromFormat('Y-m-d', '1900-01-01')
                    ->addDays($value[13] - 2) // Restar 1 porque Excel cuenta desde el 1 de enero de 1900
                    ->format('m/d/y') : '',
                'descuento_ total'  => $value[14],
                'descuento' => $value[15],
                'minimo_a_pagar'    => $value[16],
                'tel_limpio'    => $value[17],
                'fecha_gestion' => ($value[18]  != '--') ? Carbon::createFromFormat('Y-m-d', '1900-01-01')
                    ->addDays($value[18] - 2) // Restar 1 porque Excel cuenta desde el 1 de enero de 1900
                    ->format('m/d/Y') : '',
                'hora_gestion'  => $value[19],
                'nombre_del_agente' => $value[20],
                'usuario_del_agente'    => $value[21],
                'accion'    => $value[22],
                'dictamen'  => $value[23],
                'subdictamen'   => $value[24],
                'fecha_pp'  => ($value[25]  != '--') ? Carbon::createFromFormat('Y-m-d', '1900-01-01')->addDays($value[25] - 2)->format('m/d/Y') : '',
                'monto_pp'  => $value[26],
                'prioridad' => $value[27],
                'de_gestiones'  => $value[28],
                'de_promesas'   => $value[29],
                'fecha_de_ultima_promesa'   => ($value[30]  != '--') ? Carbon::createFromFormat('Y-m-d', '1900-01-01')->addDays($value[30] - 2)->format('m/d/Y') : '',
                'monto_de_ultima_promesa'   => $value[31],
                'user_id'   => $value[0],
            ]);
        }
        return response()->json([
            'status' => 'success',
            'msg' => 'Archivo cargado correctamente.',
            'data' => []
        ]);
    }
}
