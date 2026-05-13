<?php

namespace App\Services;

class MailService
{
    public function sendMail(string $to, string $subject, string $body): string
    {
        return "Mail sent to {$to} with subject: {$subject} and message: {$body}";
    }
}