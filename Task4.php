<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        $separators = ['_', '-', ' '];

        $normalInput = false;
        for ($i = 0; $i < strlen($input); $i++) {
            $symbol = $input[$i];
            if (!ctype_alpha($symbol)) {
                for ($j = 0; $j < count($separators); $j++) {
                    if ($symbol == $separators[$j]) {
                        $normalInput = true;
                        break;
                    }
                }
                if ($normalInput == false) {
                    throw new \InvalidArgumentException();
                }
            }
        }

        $nextUpperCase = true;
        $result = "";
        for ($i = 0; $i < strlen($input); $i++) {
            if (ctype_alpha($input[$i])) {
                if ($nextUpperCase) {
                    $result = $result . strtoupper($input[$i]);
                    $nextUpperCase = false;
                } else {
                    $result = $result . strtolower($input[$i]);
                }
            } else {
                for ($j = 0; $j < count($separators); $j++) {
                    if ($input[$i] == $separators[$j]) {
                        $nextUpperCase = true;
                    }
                }
                if ($nextUpperCase == false) {
                    throw new \InvalidArgumentException();
                }
            }
        }

        return $result;
    }
}

$task = new Task4();

print $task->main("The quick-brown_fox jumps over the_lazy-dog");
print $task->main("The quick/brown_fox jumps over the_lazy-dog");
print $task->main("The quick\brown_fox jumps over the_lazy-dog");
