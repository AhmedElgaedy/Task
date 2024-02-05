<?php

namespace Core\Post\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                    'name' => 'string|required',
                    'description' => 'nullable',
                    'priority' => 'nullable|',
                    'is_done' => 'required',

                ];
            }
            case 'PUT': {
                return [
                    'name' => 'string|required',
                    'description' => 'nullable',
                    'priority' => 'nullable|',
                    'is_done' => 'required',

                ];
            }
        }
    }
}
