<?php namespace ElChido\Http\Controllers;

use ElChido\Http\Requests;
use ElChido\Http\Requests\MovieCreateRequest;
use ElChido\Http\Requests\MovieUpdateRequest;
use ElChido\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ElChido\Movie;
use Redirect;
use Session;

class MovieController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	/*public funcTion __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
	}*/
	public function index()
	{
		$movies=Movie::paginate(0);
		return view('movie.index',compact('movies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('movie.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MovieCreateRequest $request)
	{
		Movie::create($request->all());
		return redirect('/movie')->with('message','Pelicula Creada Corectamente');
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
		$movie=Movie::find($id);
		return view('movie.edit',['movie'=>$movie]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, MovieUpdateRequest $request)
	{
		//se crea la variable movie y se busca en el modelo el id que se esta mandando 
		$movie=Movie::find($id);
		//
		$movie->fill($request->all());
		//
		$movie->save();
		//
		Session::flash('message','Pelicula Actualizada correctamente');
		return Redirect::to('/movie');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Movie::destroy($id);
		Session::flash('message','Pelicula Eliminada Corectamente');
		return REdirect::to('/movie');
	}

}
