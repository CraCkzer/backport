<?php

namespace CraCkzer\Backport\Form\Field;

use CraCkzer\Backport\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
