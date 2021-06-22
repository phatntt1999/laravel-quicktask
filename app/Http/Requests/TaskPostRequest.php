<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Http\FormRequest;

class TaskPostRequest extends FormRequest
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
            'name' => 'required|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => trans('userMessageLog.required'),
            'name.max:255' => trans('userMessageLog.max-255'),
        ];
    }
}
