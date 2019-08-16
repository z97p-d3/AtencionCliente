<?php

namespace sisTickets;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	/*Tabla cliente*/
    protected $table ='cliente';
	
	protected $primaryKey ='idcliente';
	
	public  $timestamps=false;
	
	
	protected $fillable=[
		
		'identificacion',
		'nombre'
	];
	
	protected $guarded =[];
		
	
}

