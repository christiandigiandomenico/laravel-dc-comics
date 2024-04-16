<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'description' => 'nullable|max:5000',
            'thumb' => 'nullable|max:1000',
            'price' => 'nullable|max:100',
            'series' => 'required|max:100',
            'sale_date' => 'nullable',
            'type' => 'required|max:100',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => "Il titolo deve avere massimo :max caratteri",
            'description.max' => "La descrizione deve avere massimo :max caratteri",
            'thumb.max' => 'La src può avere massimo :max caratteri',
            'series.max' => "La serie può avere massimo :max caratteri",
            'type.required' => "La serie deve essere inserita",
            'type.max' => "La tipologia può avere massimo :max caratteri",
        ];
    }
}
