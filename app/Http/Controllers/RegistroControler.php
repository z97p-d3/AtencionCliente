<?php

namespace sisTickets\Http\Controllers;

use Illuminate\Http\Request;

class RegistroControler extends Controller
{
    public function index(){
		
		return view('registro.index');
	}
}
