<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\ContactSubject;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

final class SendContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', new Enum(ContactSubject::class)],
            'message' => ['required', 'string', 'max:5000'],
            'subscribe' => ['nullable', 'string', 'in:yes,on,1,true'],
        ];
    }
}