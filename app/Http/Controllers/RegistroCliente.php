<?php

namespace sisTickets\Http\Controllers;

use Illuminate\Http\Request;
use sisTickets\Http\Requests;
use sisTickets\Cliente;
use Illuminate\Support\Facades\Redirect;
use sisTickets\http\Requests\ClienteFormRequest;
use DB;

class RegistroCliente extends Controller
{
    public function __construct(){}
	
	public function index(){
		return view ('cliente.index');
		
	}
	public function create(){
		
		
	}
	
	public function store(ClienteFormRequest $request){
		$cliente = new cliente;
		$cliente->identificacion=$request->get('identificacion');
		$cliente->nombre=$request->get('nombre');
		$cliente->condicion='1';
		$cliente->save();
		return Redirect::to('registrar');
		
		
		
	}
	public function show(){}
	
	
}
