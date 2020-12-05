<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFiliers extends FormRequest
{
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
           'nom_filier'        =>'required', 
           'faculte_nom'       =>'required', 
           'niveau'            =>'required', 
           'filier_discription'=>'required|min:5|max:1000', 
           'status'            =>'required',
        
        ];
    }
}
