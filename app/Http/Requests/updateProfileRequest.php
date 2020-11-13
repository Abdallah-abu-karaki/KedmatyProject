<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateProfileRequest extends FormRequest
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
            'description'=>'required|max:255',
            'location'=>'required',
            'number'=>'required',
        ];
    }

    public function messages()
    {
        return[

            'description.required' => 'A description is required',
            'location.required' => 'A location is required',
            'number.required' => 'A number is required',

        ];
    }
}
