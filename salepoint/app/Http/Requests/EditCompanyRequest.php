<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 26/03/15
 * Time: 01:38 AM
 */
class EditCompanyRequest extends Request {

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
            'name' =>'required',
            'fiscalRegimen_id'=>'required'
        ];
    }

}
