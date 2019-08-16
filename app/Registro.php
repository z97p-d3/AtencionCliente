<?php

namespace sisTickets;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
	
{
	/*tabla registro*/
       protected $table ='registro';
	
	protected $primaryKey ='id_registro';
	
	public  $timestamps=false;
	
	
	protected $fillable=[
		
		'atendido',
		'fecha_registro'
	];
	
	protected $guarded =[];
		
	
}
