<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureRequest extends FormRequest
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
            't1' => 'required',
            't2' => 'required',
            't3' => 'required',
            't4' => 'required',
            't5' => 'required',
            't6' => 'required',
            't7' => 'required',
            't8' => 'required',
            't9' => 'required',
            't10' => 'required',
            't11' => 'required'

        ];
    }
}
