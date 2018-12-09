<?php

/*
 * Array sorter library
 */

namespace Mybeard\StrategySorter;

/**
 * Implements logic for sorting by chosen strategy
 */
class Sort
{
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function setComparator(ComparatorInterface $comparator): void
    {
        $this->comparator = $comparator;
    }

    /**
     * @param $elements array for sort
     *
     * @return array sorted array.
     */
    public function executeStrategy(array $elements): array
    {
        \uasort($elements, [$this->comparator, 'sort']);

        return $elements;
    }
}
