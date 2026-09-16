<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Enums\ContactSubject;
use App\Services\ContactService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

final class SendContactEmail implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly ContactSubject $subject,
        public readonly string $messageContent,
        public readonly bool $subscribe = false,
    ) {}

    public function handle(ContactService $contactService): void
    {
        $contactService->sendContactEmail(
            name: $this->name,
            email: $this->email,
            subject: $this->subject,
            messageContent: $this->messageContent,
            subscribe: $this->subscribe,
        );
    }
}