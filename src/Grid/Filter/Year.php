<?php

namespace CraCkzer\Backport\Grid\Filter;

class Year extends Date
{
    /**
     * {@inheritdoc}
     */
    protected $query = 'whereYear';

    /**
     * @var string
     */
    protected $fieldName = 'year';
}
