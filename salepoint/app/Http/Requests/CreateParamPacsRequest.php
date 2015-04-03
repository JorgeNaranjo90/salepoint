<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateParamPacsRequest extends Request {

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
          'name'=>'required',
        'methodType'=>'required',
        'urlWebService'=>'required',
        'nameSpace'=>'required',
       'userPac'=>'required',
       'passwordPac'=>'required',
       'certificateLink'=>'required',
        'active'=>'required',
		];
	}

}
