<?php

namespace Core\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'first_name' => 'string|required',
                    'last_name' => 'required',
                    'password' => 'string|required',
                    'email' => 'string|required',
                    'phone' => 'string|required',

                ];
            }
            case 'PUT': {
                return [
                    'first_name' => 'string|required',
                    'last_name' => 'required',
                    'password' => 'string|required',
                    'email' => 'string|required',
                    'phone' => 'string|required',

                ];
            }
        }
    }
}
