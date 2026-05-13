<?php

namespace App\Services;

class NotificationService 
{
    protected MailService $mailService; 
    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function send(string $to, string $subject, string $body)
    {
        return $this->mailService->sendMail($to, $subject, $body);
    }
} 