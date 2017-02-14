<?php namespace ElChido;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {
	
	protected $table='movies';
	protected $fillable=['nombre','cast','direction','path','video'];

}
