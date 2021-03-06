<?php

namespace CraCkzer\Backport\Grid\Filter\Presenter;

use CraCkzer\Backport\Facades\Backport;

class Checkbox extends Radio
{
    protected function prepare()
    {
        $script = "$('.{$this->filter->getId()}').iCheck({checkboxClass:'icheckbox_minimal-blue'});";

        Backport::script($script);
    }
}
