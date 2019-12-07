<?php

namespace App\SingleResponsibilityViolation;

class Order {
    // Create method violating SRP
    public function createWithSRPViolation($request)
    {
        // Validate the order request
        $requiredFields = [];
        $failedValidation = [];

        foreach($requiredFields as $rule) {
            // Do some checking...
            if(! $order->$rule) {
                return array_push($failedValidation, $rule);
            }
        }

        $isValid = count($failedValidation) > 0;

        if(! $isValid) {
            return false;
        }

        // Store the order request
        // DB setup...
        // Insert command...

        // Email the order confirmation
        return mail('example@example.com', 'Order has been confirmed', 'Order details within here...');
    }
}
