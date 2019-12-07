<?php

namespace App\SingleResponsibilityPrinciple;

class OrderValidationService
{
    protected $requiredFields = ['name', 'total'];

    public function validate($order)
    {
        $failedValidation = [];

        foreach($this->requiredFields as $rule) {
            // Do some checking...
            if(! $order[$rule]) {
                array_push($failedValidation, $rule);
                continue;
            }
        }

        return count($failedValidation) > 0;
    }
}
