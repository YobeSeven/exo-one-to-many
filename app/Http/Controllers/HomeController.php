<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        return view("home" , compact("eleves"));
    }
}
