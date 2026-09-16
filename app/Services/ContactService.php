<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\ContactSubject;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

final class ContactService
{
    public function sendContactEmail(
        string $name,
        string $email,
        ContactSubject $subject,
        string $messageContent,
        bool $subscribe = false
    ): bool {
        $recipient = config('mail.contact_recipient', 'marketing1@infinity-sby.com');
        $subjectLabel = $subject->label();
        $subscribeText = $subscribe ? 'Yes' : 'No';
        $body = "Name : {$name}\n" .
            "Email : {$email}\n\n" .
            "Message :\n\n{$messageContent}\n\n" .
            "Subscribe Newsletter : {$subscribeText}";
        try {
            Mail::raw($body, function ($message) use ($recipient, $email, $name, $subjectLabel) {
                $message->to($recipient)
                    ->subject($subjectLabel)
                    ->replyTo($email, $name);
            });
            return true;
        } catch (TransportExceptionInterface $e) {
            Log::error('SMTP Transport error sending contact email: ' . $e->getMessage(), [
                'sender' => $email,
                'subject' => $subject->value,
            ]);
            return false;
        } catch (\Throwable $e) {
            Log::error('Unexpected error sending contact email: ' . $e->getMessage(), [
                'sender' => $email,
                'subject' => $subject->value,
            ]);
            return false;
        }
    }
}