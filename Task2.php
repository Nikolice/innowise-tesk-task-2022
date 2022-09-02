<?php

namespace src;

class Task2
{
    public function main(string $date): int
    {
        $format = 'd.m.Y';
        $target = date_create_from_format($format, $date);
        if ($target && $target->format($format) == $date) {
            $origin = date_create('now');
            $interval = date_diff($origin, $target);

            return $interval->format('%a');
        } else {
            throw new \InvalidArgumentException();
        }
    }
}

$application = new Task2();

echo $application->main('01.09.2022') . '<br>';
echo $application->main('02.09.2022') . '<br>';
echo $application->main('30.09.2022') . '<br>';
echo $application->main('31.09.2022') . '<br>';
echo $application->main('32.09.2022') . '<br>';
