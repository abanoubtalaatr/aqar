<?php

namespace App\Http\Requests\Api\Order\Rent;

use Illuminate\Foundation\Http\FormRequest;

class RestRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to category 1.
     */
    public function rules(): array
    {
        return [
            'street_width_from' => ['nullable'],
            'street_width_to' => ['nullable'],
            'property_age_from' => ['nullable'],
            'property_age_to' => ['nullable'],
            'face_building_id' => ['nullable'],
            'pool' => ['nullable','boolean'],
        ];
    }
}
