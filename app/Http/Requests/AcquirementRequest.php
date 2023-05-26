<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcquirementRequest extends FormRequest
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
            // 'user_id' => ['required', 'max:50'],
            'farmer_id' => ['required', 'max:50'],
            // 'rst' => ['required', 'unique:acquirements', 'max:50'],
            'rst' => ['required', Rule::unique('acquirements')->ignore($this->acquirement)],
            // 'weight' => ['max:50'],
            // 'is_cleared' => ['required'],
            // 'is_approved' => ['max:255'],
            'comment' => ['max:1024'],
            // 'aadhaar_card' => ['max:2048', 'mimes:jpeg,png,jpg,gif,svg'],
            // 'photo' => ['max:2048', 'mimes:jpeg,png,jpg,gif,svg'],
        ];
    }
}
