<?php namespace ElChido\Http\Controllers;

use ElChido\Http\Requests;
use ElChido\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(){
		$this->middleware('auth',['only'=>'admin']);
	}
	public function admin(){
		return view('admin.index');
	}
}
