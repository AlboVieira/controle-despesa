<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DespesaController extends Controller
{
    public function despesas(){
        return response()->json(['retorno' => true]);
    }
}
