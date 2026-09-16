<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\ContactSubject;
use App\Http\Requests\SendContactRequest;
use App\Services\ContactService;
use Illuminate\Http\JsonResponse;

final class ContactController extends Controller
{
    public function __construct(
        private readonly ContactService $contactService
    ) {}

    public function send(SendContactRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $success = $this->contactService->sendContactEmail(
            name: $validated['name'],
            email: $validated['email'],
            subject: ContactSubject::from($validated['subject']),
            messageContent: $validated['message'],
            subscribe: $request->has('subscribe'),
        );
        if (!$success) {
            return response()->json([], 500);
        }
        return response()->json([], 200);
    }
}
