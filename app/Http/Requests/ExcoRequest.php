<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExcoRequest extends FormRequest
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
            'exco_name' => 'required',
            'exco_mail' => 'required|email|unique:excos,exco_email',
            'exco_position' => 'required',
            'dept_college' => 'required',
            'exco_leadership' => 'required'
        ];
    }
}
