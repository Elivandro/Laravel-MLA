<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'short_description' => 'required',
            'price' => 'required|digits_between:1,6',
            'code' => 'required|max:8'
        ];
    }
}
