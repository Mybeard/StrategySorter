<?php
namespace Mybeard\StrategySorter;

class DescendingSort implements ComparatorInterface
{
    public function sort($a, $b): int
    {
        if ($a == $b) {
            return 0;
        }

        return ($a < $b) ? 1 : -1;
    }
}
