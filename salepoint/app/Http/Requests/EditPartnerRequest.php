<?php namespace App\Http\Requests;



class EditPartnerRequest extends Request {

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
            'name' => 'required|max:60',
            'lastName' => 'max:60',
            'street' => 'max:40',
            'noExt' => 'max:7',
            'noInt' => 'max:5',
            'colony' => 'max:60',
            'zip' => 'max:6',
            'locality' => 'max:60',
            'rfc' => 'max:20',
            'email' => 'max:30',
            'phone' => 'between:7,15',
            'mobile' => 'between:7,15',
            'fax' => 'between:5,9',
            'email' => 'max:20',
            'country_id' => 'required|max:3|in:1',
            'state_id' => 'required|max:4|in:1',
            'city_id' => 'required|max:5|in:1',

        ];
	}

}
