<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, array<mixed>|\Illuminate\Contracts\Validation\ValidationRule|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|string',
            'content'       => 'required|string',
            'category_id'   => 'required|integer|exists:categories,id',
            'preview_image' => 'nullable|file',
            'main_image'    => 'nullable|file',
            'tag_ids'       => 'nullable|array',
            'tag_ids.*'     => 'nullable|integer|exists:tags,id',
        ];
    }
}
