<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsAlphanumericValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var ContainsAlphanumeric $constraint */

        if ($constraint instanceof ContainsAlphanumeric) {
            if ($constraint->min) {
                if (strlen($value) < $constraint->min) {
                    $this->context->buildViolation($constraint->message)
                        ->addViolation();
                }
            }

            if ($constraint->max) {
                if (strlen($value) > $constraint->max) {
                    $this->context->buildViolation($constraint->message)
                        ->addViolation();
                }
            }
        }

    }


}