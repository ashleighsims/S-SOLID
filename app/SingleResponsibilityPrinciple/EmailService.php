<?php

namespace App\SingleResponsibilityPrinciple;

class EmailService
{
    public function send($to, $subject, $message)
    {
        // Send the email...
        return mail($to, $subject, $message);
    }
}
