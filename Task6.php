<?php

namespace src;

class Task6
{
    public static function main(
        int $year,
        int $lastYear,
        int $month,
        int $lastMonth,
        string $day = 'Monday'
    ): int {
        if (
            !(
                is_int($year)
            && (is_int($lastYear))
            && (is_int($month))
            && (is_int($lastMonth))
            && (($month > 0) && ($month < 13))
            && (($lastMonth > 0) && ($lastMonth < 13))
            && (($year < $lastYear) || (($year == $lastYear) && ($month <= $lastMonth)))
            )
        ) {
            throw new \InvalidArgumentException();
        }

        print '<ol>';
        $result = 0;
        for ($i = $year; $i <= $lastYear; $i++) {
            for ($j = $month; $j <= $lastMonth; $j++) {
                $date = date_create_from_format('d.m.Y', "01.{$j}.{$i}");
                if ($date->format('l') == $day) {
                    $result++;
                    echo "<li>{$date->format('Y.m.d')} – {$day}</li>";
                }
            }
        }
        print '</ol>';

        return $result;
    }
}

$x = new Task6();
print $x->main(1980, 1999, 1, 12) . '<br>';
print $x->main(1999, 1999, 1, 12) . '<br>';
print $x->main(1999, 1990, 1, 12) . '<br>';
