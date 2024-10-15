<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'title'          => 'required|string',
            'content'        => 'required|string',
            'category_ids'   => 'nullable|array',
            'category_ids.*' => 'nullable|integer|exists:tags,id',
            'preview_image'  => 'nullable|file',
            'main_image'     => 'nullable|file',
            'tag_ids'        => 'nullable|array',
            'tag_ids.*'      => 'nullable|integer|exists:tags,id',
        ];
    }
}
