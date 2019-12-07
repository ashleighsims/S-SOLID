<?php

namespace App\Tests;

use App\SingleResponsibilityPrinciple\EmailService;
use PHPUnit\Framework\TestCase;

class EmailServiceTest extends TestCase
{
    public function testEmailServiceSend()
    {
        $emailService = new EmailService();
        $this->assertTrue($emailService->send('example@example.com', 'Testing Email Logic', 'Hello, Testing the email send logic from send...'));
    }

}
