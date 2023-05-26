<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FarmerRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'primary_contact' => ['required', Rule::unique('farmers')->ignore($this->farmer), 'max:50'],
            'secondary_contact' => ['max:50'],
            'village' => ['max:50'],
            'gender' => ['required'],
            'comment' => ['max:255'],
            // 'aadhaar_card' => ['max:2048', 'mimes:jpeg,png,jpg,gif,svg'],
            // 'photo' => ['max:2048', 'mimes:jpeg,png,jpg,gif,svg'],
        ];
    }
}
