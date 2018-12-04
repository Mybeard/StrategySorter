<?php
namespace Mybeard\StrategySorter;

class Context
{
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array
    {
        \uasort($elements, [$this->comparator, 'sort']);

        return $elements;
    }
}
