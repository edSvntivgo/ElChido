<?php namespace ElChido\Http\Controllers;

use ElChido\Http\Requests;
use ElChido\Http\Requests\CreateGenerosRequest;
use ElChido\Http\Requests\UpdateGenerosRequest;
use ElChido\Http\Controllers\Controller;
use ElChido\Genre;
use Illuminate\Http\Request;
use Session;
use Redirect;

class GenerosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public funcTion __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
	}
	public function index()
	{
		$generos=Genre::paginate(4);
		return view('genres.index',compact('generos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('genres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateGenerosRequest $request)
	{
		Genre::create($request->all());
		Session::flash('message','Genero creado corectamente');
		return Redirect::to('/genero');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
