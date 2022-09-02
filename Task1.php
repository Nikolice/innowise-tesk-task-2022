<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {
        if (!is_numeric($inputNumber)) {
            throw new \InvalidArgumentException();
        }

        return
            ($inputNumber > 30) ? 'More than 30' : (
                ($inputNumber > 20) ? 'More than 20' : (
                    ($inputNumber > 10) ?
                    'More than 10' : 'Equal or less than 10'
                )
            );
    }
}

echo 'Hello! <br>';

$x = new Task1();

echo '50: '         . $x->main(50)      . '<br>';
echo '40: '         . $x->main(40)      . '<br>';
echo '30: '         . $x->main(30)      . '<br>';
echo '20: '         . $x->main(20)      . '<br>';
echo '10: '         . $x->main(10)      . '<br>';
echo '111.111: '    . $x->main(111.111) . '<br>';
echo 'X: '          . $x->main('X')     . '<br>';
echo '1.111: '      . $x->main(1.111)   . '<br>';
