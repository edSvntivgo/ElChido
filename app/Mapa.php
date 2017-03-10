<?php namespace ElChido;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model {

	protected $table='mapa';
	protected $fillable='direccion,lat,lng';

}
