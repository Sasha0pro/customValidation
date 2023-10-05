<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 *
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class ContainsAlphanumeric extends Constraint
{
    public string $message = 'long message';
    public $min;
    public $max;

    public function __construct($min = null, $max = null , $message = null, array $groups = null, $playload = null)
    {

        parent::__construct([], $groups, $playload);

        $this->min = $min ?? $this->min;
        $this->max = $max ?? $this->max;
        $this->message = $message ?? $this->message;
    }

}
