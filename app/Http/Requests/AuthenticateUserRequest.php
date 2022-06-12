<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class AuthenticateUserRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:255', 'regex:/[a-zA-Z]{3,}.[a-zA-Z]{3,}[0-9]{0,2}@inphb.ci/'],
            'password' => ['required', Password::defaults()]
        ];
    }
}
