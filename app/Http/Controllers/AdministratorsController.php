<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// MODELS
use App\Models\User;

class AdministratorsController extends Controller
{
    public function index() {
        $administradores = User::where('role', '=', 1)->get(); // Obtener todos los administradores de la base de datos
    }
}
