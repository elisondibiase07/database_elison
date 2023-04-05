<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:10|max:100',
            'description' => 'required|min:9|max:5000',
            'author' => 'required',
            'img' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required'=> 'Il titolo è richiesto',
            'description.required'=> 'La descrizione è richiesta',
            'author.required'=> 'L\'autore è richiesto',
            'img.required'=> 'L\'immagine è richiesta',

        ];
    }
}
