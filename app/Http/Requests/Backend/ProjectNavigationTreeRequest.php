<?php

namespace App\Http\Requests\Backend;

use Motor\Backend\Http\Requests\Request;

class ProjectNavigationTreeRequest extends Request
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

        ];
    }
}
