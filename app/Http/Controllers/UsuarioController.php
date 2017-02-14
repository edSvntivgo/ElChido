<?php namespace ElChido\Http\Controllers;

use ElChido\Http\Requests;
use ElChido\Http\Controllers\Controller;
use ElChido\Http\Requests\UsuarioCreateRequest;
use ElChido\Http\Requests\UpdateUserRequest;
use ElChido\User;
use Session;
use Redirect;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

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
		$users=User::paginate(2);
		return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UsuarioCreateRequest $request)
	{
		User::create($request->all());
		return redirect('/usuario')->with('message','usuario creado correctamente');
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
		$user=User::find($id);
		return view('usuario.edit',['user'=>$user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UpdateUserRequest $request)
	{
		$user=User::find($id);
		$user->fill($request->all());
		$user->save();
		Session::flash('message','Usuario Actualizado Corectamente');
		return Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		Session::flash('message','Usuario Eliminado Corectamente');
		return Redirect::to('/usuario');
	}

}
