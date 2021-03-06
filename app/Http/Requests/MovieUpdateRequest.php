<?php namespace ElChido\Http\Requests;

use ElChido\Http\Requests\Request;

class MovieUpdateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre'=>'required',
			'cast'=>'required',
			'direction'=>'required',
			'path'=>'required',
			'video'=>'required',
		];
	}

}
