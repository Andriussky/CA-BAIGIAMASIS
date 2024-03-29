<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CartRequest
 *
 * @package App\Http\Requests
 *
 * @property int $shelf_content_id
 * @property int $quantity
 */
class CartShelfUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'quantity'   => 'required|integer|min:1|max:5',
        ];
    }
}
