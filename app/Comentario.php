<?php namespace ElChido;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {

	protected $table='comentarios';
	protected $fillable=['usuario','comentario'];
}
