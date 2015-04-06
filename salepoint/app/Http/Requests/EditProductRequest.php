<?php
/**
 * Created by PhpStorm.
 * User: deragonu89
 * Date: 27/03/15
 * Time: 08:57 PM
 */

namespace App\Http\Requests;
use Illuminate\Routing\Route;


class EditProductRequest extends Request{

    private $route;

    public function __construct(Route $route){
        $this->route=$route;
    }

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
            'name' =>'required|unique:products,name,'.$this->route->getParameter('products'),
            'ean13' =>'required|unique:products,ean13,'.$this->route->getParameter('products')
        ];
    }
}