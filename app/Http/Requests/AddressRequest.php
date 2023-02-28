<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'country' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'zip' => ['required', 'max:255'],
            'street' => ['required', 'max:255'],
            'house_number' => ['required', 'max:255'],
            'apartment_number' => ['required', 'max:255'],
            'state' => ['required', 'max:255'],
            'type' => ['required', 'max:255'],
            'additional_info' => ['required', 'max:255'],
            'user_id' => ['required', 'integer'],

        ];
    }
}
