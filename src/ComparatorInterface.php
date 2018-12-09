<?php

/*
 * Array sorter library
 */

namespace Mybeard\StrategySorter;

interface ComparatorInterface
{
    public function sort($a, $b): int;
}
