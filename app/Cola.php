<?php

namespace sisTickets;

use Illuminate\Database\Eloquent\Model;

class Cola extends Model
{
      protected $table ='cola';
	
	protected $primaryKey ='idcola';
	
	public  $timestamps=false;
	
	
	protected $fillable=[
		
		'nombrecola',
		'tiempo_espera'
	];
	
	protected $guarded =[];
		
	
}
