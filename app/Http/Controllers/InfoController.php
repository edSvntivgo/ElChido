<?php namespace ElChido\Http\Controllers;

use ElChido\Http\Requests;
use ElChido\Http\Controllers\Controller;

use Illuminate\Http\Request;

class InfoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}
	public function quienes(){
		return view('info.quien');
	}
	public function obtener(){
		return view('info.obten');
	}
	public function sociales(){
		return view('info.sociales');
	}
	public function login(){
		return view('index');
	}
}
