<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KamiSamaPost extends FormRequest
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
            'title'=> 'required',
            'picURL'=> 'nullable',
            'postBody' => 'required',
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
        'title.required' => 'A title is required my dude',
        'body.required'  => 'Where\'s da post my dude?',
    ];
}
}
