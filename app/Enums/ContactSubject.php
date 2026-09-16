<?php

declare(strict_types=1);

namespace App\Enums;

enum ContactSubject: string
{
    case Quotation = 'quotation';
    case General = 'general';
    case Partnership = 'partnership';
    case Technical = 'technical';
    case Feedback = 'feedback';
    case Other = 'other';

    public function label(): string
    {
        return match ($this) {
            self::Quotation => 'Request For Quotation',
            self::General => 'General Inquiry',
            self::Partnership => 'Partnership Opportunity',
            self::Technical => 'Technical Support',
            self::Feedback => 'Feedback & Suggestions',
            self::Other => 'Other',
        };
    }
}