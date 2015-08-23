<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddJobRequest extends Request
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
            'job'               => 'required|min:3',
            'job_description'   => 'required|min:3',
            'job_position'      => 'required|min:3',
            'started_on'        => 'required',
        ];
    }
}
