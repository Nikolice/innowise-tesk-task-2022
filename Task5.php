<?php

namespace src;

class Task5
{
    public static function main(int $n): int
    {
        if (!is_numeric($n)) {
            throw new \InvalidArgumentException();
        }

        $result = "";

        $fibonacci = array(1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377);
        
        do {
            $count = count($fibonacci);
            $newNumber = $fibonacci[$count - 1] + $fibonacci[$count - 2];
            array_push($fibonacci, $newNumber);
            $result = $fibonacci[$count];
            // print strlen($result) . '<br>'; 
        } while (strlen($result) < $n);

        // $result = $newNumber;
        // $result = array_pop($fibonacci);

        return $result;
    }
}

$x = new Task5();
print $x->main(10);
print $x->main("10");
print $x->main("XXX");