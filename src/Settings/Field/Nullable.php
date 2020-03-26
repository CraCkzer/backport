<?php

namespace CraCkzer\Backport\Settings\Field;

use CraCkzer\Backport\Settings\Field;

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
