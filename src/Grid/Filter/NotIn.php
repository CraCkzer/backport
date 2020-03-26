<?php

namespace CraCkzer\Backport\Grid\Filter;

class NotIn extends In
{
    /**
     * {@inheritdoc}
     */
    protected $query = 'whereNotIn';
}
