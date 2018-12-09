<?php

/*
 * Array sorter library
 */

namespace Mybeard\StrategySorter;

/**
 * Callback function for Asc sorting
 */
class AscendingSort implements ComparatorInterface
{
    public function sort($a, $b): int
    {
        if ($a == $b) {
            return 0;
        }

        return ($a < $b) ? -1 : 1;
    }
}
