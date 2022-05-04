<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
                        'title' => 'required|string|min:2|max:150|unique:employees,title->en'. $this->id,
                        'title_ar' => 'required|string|min:2|max:150|unique:employees,title->ar'. $this->id,
                        'name' => 'required|string|min:2|max:150|unique:employees,name->en' . $this->id,
                        'name_ar' => 'required|string|min:2|max:150|unique:employees,name->ar' . $this->id,
                        'photo' => 'sometimes|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [
                        'title' => 'required|string|min:2|max:150|unique:employees,title->en' . $this->id,
                        'title_ar' => 'required|string|min:2|max:150|unique:employees,title->ar' . $this->id,
                        'name' => 'required|string|min:2|unique:employees,name->en' .$this->id,
                        'name_ar' => 'required|string|min:2|unique:employees,name->ar' . $this->id,
                        'photo' => 'sometimes|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
         return [


            'title.required' => __('validation.required'),
            'title.string' => __('validation.string'),
            'title.min' => __('validation.min'),
            'title.max' => __('validation.max'),
            'title.regex' => __('validation.regex'),
            'title.unique' => __('validation.unique'),


            'title_ar.required' => __('validation.required'),
            'title_ar.string' => __('validation.string'),
            'title_ar.min' => __('validation.min'),
            'title_ar.max' => __('validation.max'),
            'title_ar.regex' => __('validation.regex'),
            'title_ar.unique' => __('validation.unique'),


            'name.required' => __('validation.required'),
            'name.string' => __('validation.string'),
            'name.min' => __('validation.min'),
            'name.regex' => __('validation.regex'),
            'name.unique' => __('validation.unique'),


            'name_ar.required' => __('validation.required'),
            'name_ar.string' => __('validation.string'),
            'name_ar.min' => __('validation.min'),
            'name_ar.regex' => __('validation.regex'),
            'name_ar.unique' => __('validation.unique'),


            'photo.image' => __('validation.image'),
            'photo.mimes' => __('validation.mimes'),
            'photo.max' => __('validation.max'),


        ];
    }
}
