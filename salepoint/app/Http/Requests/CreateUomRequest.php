<?php
/**
 * Created by PhpStorm.
 * User: deragonu89
 * Date: 27/03/15
 * Time: 08:48 PM
 */

namespace App\Http\Requests;
use App\Http\Requests\Request;

class CreateUomRequest extends Request{
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
            'name' =>'required|unique:uoms,name'
        ];
    }
}