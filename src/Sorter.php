<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 04.12.18
 * Time: 21:50
 */

namespace Mybeard\StrategySorter;


interface Sorter
{
    public function sort(array $data): array
}