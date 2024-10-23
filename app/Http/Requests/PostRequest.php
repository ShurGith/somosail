<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class PostRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'titulo' => 'required|min:15|max:200',
            'excerpt' => 'required|min:50|max:250',
            'content' => 'required|min:100',
            'file_image'=> ['required',File::image()->max(5 * 1024)],
            'category_id'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'category_id.required' => 'Es obligatorio indicar una categoría.',
            'file_image.required' => 'Es necesario añadir una imagen para el post.',
        ];
    }
}
