<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $msg = "esse valor está vindo dinamicamente a minha rota";
        $array = [ "orange", "apple", "banana"];
        return view('welcome', ["mensagem" => $msg, "array" => $array]);
    }

    public function create(){
        
        return view('events.create');
    }
}
