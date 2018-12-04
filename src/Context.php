<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 04.12.18
 * Time: 22:12
 */

namespace Mybeard\StrategySorter;


class Context
{
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements) : array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}