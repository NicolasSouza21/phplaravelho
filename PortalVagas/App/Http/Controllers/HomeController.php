<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Vaga;

class HomeController extends Controller
{
    public function index(){
        $vagas = Vaga::take(3)->get();
        return view("home",compact('vagas'));
        
    }

}
