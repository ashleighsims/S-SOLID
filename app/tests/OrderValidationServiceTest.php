<?php

namespace App\Tests;

use App\SingleResponsibilityPrinciple\OrderValidationService;
use PHPUnit\Framework\TestCase;

class OrderValidationServiceTest extends TestCase
{
    public function testOrderValidationSuccess()
    {
        $orderValidation = new OrderValidationService();
        $this->assertFalse($orderValidation->validate(['name' => 'Test Product', 'total' => 500.00]));
    }

    public function testOrderValidationFailure()
    {
        $orderValidation = new OrderValidationService();
        $this->assertTrue($orderValidation->validate(['name' => null, 'total' => 500.00]));
    }
}
