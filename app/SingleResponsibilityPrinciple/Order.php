<?php

namespace App\SingleResponsibilityPrinciple;

class Order {
    // Create method not violating
    public function create($request)
    {
        $validationService = new OrderValidationService();

        // Validate the order request
        $isValid = $validationService->validate($request);

        if(! $isValid) {
            return false;
        }

        // Store the order request
        $order = (new OrderRepository())->save($request);

        // Email the order confirmation
        (new EmailService())
            ->send('example@example.com', 'Order has been confirmed', 'Order details within here...');


        return $order;
    }
}
