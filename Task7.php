<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (($position > (count($arr) - 1)) || ($position < 0)) {
            throw new \InvalidArgumentException();
        }

        $index = 'th';
        switch ($position) {
            case 1: $index = 'st';

                break;
            case 2: $index = 'nd';

                break;
            case 3: $index = 'rd';
        }

        echo "<div class='block'>";
        echo '<h3>Task:</h3>';
        echo "<p>Delete the <em>«<b class='big'>{$position}</b>»<sup>-{$index}</sup></em> Element!</p>";

        echo '<table>';
        // echo '<caption>XXX</caption>';
        echo '<tr><td>';
        echo '<h3>Given…</h3>';
        echo '<pre class="data">';
        Task7::printArray($arr, $position - 1, $position, $position + 1);
        echo '</pre>';
        $deletedElement = $arr[$position];
        echo "<div>To be <em>Deleted</em>: <br> <b class='big'>«{$deletedElement}»</b>.</div>";
        echo '</td>';
        $count = count($arr);
        for ($i = $position; $i < $count - 1; $i++) {
            $arr[$i] = $arr[$i + 1];
        }

        echo '<td>';
        echo '<h3>Result</h3>';
        $lastElement = array_pop($arr);
        echo '<pre class="data">';
        // print_r($arr);
        Task7::printArray($arr, $position - 1, $position);
        echo '</pre>';
        echo '</td>';

        // echo '<td>';
        // echo '<br>';
        // echo "<div>The <em>Last</em> Element: <br> <b class='big'>«{$lastElement}»</b>.</div>";
        echo '</td>';
        echo '</tr></table></div>';

        return $arr;
    }

    public function printArray(array $arr, int ...$bright): void
    {
        print '<h4>Array</h4>';
        // print '(<br>';

        print "<ol start='0'>";
        for ($i = 0; $i < count($arr); $i++) {
            $isBright = false;
            for ($j = 0; $j < count($bright); $j++) {
                if ($i == $bright[$j]) {
                    $isBright = true;

                    break;
                }
            }
            if ($isBright == true) {
                print "<li class='bright'>";
                print "<b><b class='big'>«{$arr[$i]}»</b></b>";
            } else {
                print "<li>";
                print "«<b>{$arr[$i]}</b>»";
            }
            print '</li>';
        }
        print "</ol>";

        // print ')';
    }
}

$x = new Task7();

echo '
<head>
    <style>
        .big {
            font-size: 18px;
        }

        .bright {
            background-color: yellow;
            color: darkgoldenrod;
            margin: 2px 0px;
            padding: 2px;
        }

        body {
            background-color: darkblue;
            color: white;
            padding: 20px;
        }

        div.block {
            border-color: gold;
            border-style: outset;
            border-width: 10px;
            margin: 30px;
            padding: 10px;
            width: min-content;
        }

        div.block:nth-child(odd) {
            background-color: white;
            color: black;
        }

        div.block:nth-child(even) {
            background-color: black;
            color: white;
        }

        div.container div {
            float: left;
        }

        hr {
            color: white;
        }

        h4 {
            font-family: monospace;
            letter-spacing: 5px;
            text-align: center;
            text-transform: uppercase;
        }

        li.bright::marker {
            color: crimson;
            font-weight: bold;
        }

        pre.data {
            background-color: goldenrod;
            border-color: gold;
            border-style: inset;
            border-width: 10px;
            color: black;
            font-family: monospace;
            font-size: 15px;
            line-height: 20px;
            text-align: left;
            padding: 10px;
            width: max-content;
        }

        pre.data#init {
            border-style: outset;
            font-size: x-large;
            line-height: normal;
        }

        td {
            background-color: floralwhite;
            border: 1px solid gold; 
            color: black;
            padding: 10px;
            text-align: center;
            vertical-align: top;
        } 
    </style>
</head>';

echo '<body>';
echo '<h1>Task 7: Array-Element Deletion</h1>';
echo '<hr>';
echo '<h2>The Data: </h2>';
echo '<pre class="data" id="init">';
$arr1 = [0, 1, 20.2, 36.6, 42, 5, 0.6, "TEXT", 80, 90];
$x->printArray($arr1);
echo '</pre>';
echo '<hr>';

echo '<h2>The Tasks:</h2>';
echo '<div class="container">';
$x->main($arr1, 0);
$x->main($arr1, 1);
$x->main($arr1, 2);
$x->main($arr1, 3);
$x->main($arr1, 4);
$x->main($arr1, 5);
$x->main($arr1, 6);
$x->main($arr1, 7);
$x->main($arr1, 8);
$x->main($arr1, 9);
$x->main($arr1, 10);
$x->main($arr1, -1);
echo '</div>';

echo '</body>';
