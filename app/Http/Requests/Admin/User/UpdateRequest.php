<?php

namespace App\Http\Requests\Admin\User;

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
     * @return array<string, array<mixed>|\Illuminate\Contracts\Validation\ValidationRule|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|string',
            'email'   => 'required|string|email|unique:users,email,' . $this->get('user_id'),
            'user_id' => 'required|integer|exists:users,id',
            'role'    => 'required|string',
        ];
    }
}
