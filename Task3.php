<?php

namespace src;

class Task3
{
    public function main(string $number): int
    {
        if (!is_numeric($number)) {
            throw new \InvalidArgumentException();
        } 

        $stack = 0;
        for ($i = 0; $i < strlen($number); $i++) {
            $symbol = $number[$i];
            if (ctype_digit($symbol)) {
                $digit = (int) $symbol;
                $stack += $digit;
                if ($stack > 9) {
                    $stack -= 9;
                }
            } else {
                continue;
            }
        }

        return $stack;
    }
}

$task = new Task3();

$time_start = microtime(true);

print '
<head><style>td {border-bottom: 1px solid #CCC;} </style></head>
Hello, world!<br>
<table>
    <tr> <th>Length</th>    <th>Value</th>                 <th>Result</th>                                       </tr>
    <tr>      <td>1</td>    <td>1</td>                     <td>' . $task->main('1')                     . '</td> </tr>
    <tr>      <td>2</td>    <td>11</td>                    <td>' . $task->main('11')                    . '</td> </tr>
    <tr>      <td>3</td>    <td>111</td>                   <td>' . $task->main('111')                   . '</td> </tr>
    <tr>      <td>4</td>    <td>1111</td>                  <td>' . $task->main('1111')                  . '</td> </tr>
    <tr>      <td>5</td>    <td>11111</td>                 <td>' . $task->main('11111')                 . '</td> </tr>
    <tr>      <td>6</td>    <td>111111</td>                <td>' . $task->main('111111')                . '</td> </tr>
    <tr>      <td>7</td>    <td>1111111</td>               <td>' . $task->main('1111111')               . '</td> </tr>
    <tr>      <td>8</td>    <td>11111111</td>              <td>' . $task->main('11111111')              . '</td> </tr>
    <tr>      <td>9</td>    <td>111111111</td>             <td>' . $task->main('111111111')             . '</td> </tr>
    <tr>     <td>10</td>    <td>1111111111</td>            <td>' . $task->main('1111111111')            . '</td> </tr>
    <tr>     <td>11</td>    <td>11111111111</td>           <td>' . $task->main('11111111111')           . '</td> </tr>
    <tr>     <td>12</td>    <td>111111111111</td>          <td>' . $task->main('111111111111')          . '</td> </tr>
    <tr>     <td>13</td>    <td>1111111111111</td>         <td>' . $task->main('1111111111111')         . '</td> </tr>
    <tr>     <td>14</td>    <td>11111111111111</td>        <td>' . $task->main('11111111111111')        . '</td> </tr>
    <tr>     <td>15</td>    <td>111111111111111</td>       <td>' . $task->main('111111111111111')       . '</td> </tr>
    <tr>     <td>16</td>    <td>1111111111111111</td>      <td>' . $task->main('1111111111111111')      . '</td> </tr>
    <tr>     <td>17</td>    <td>11111111111111111</td>     <td>' . $task->main('11111111111111111')     . '</td> </tr>
    <tr>     <td>18</td>    <td>111111111111111111</td>    <td>' . $task->main('111111111111111111')    . '</td> </tr>
    <tr>     <td>19</td>    <td>1111111111111111111</td>   <td>' . $task->main('1111111111111111111')   . '</td> </tr>
    <tr>     <td>20</td>    <td>11111111111111111111</td>  <td>' . $task->main('11111111111111111111')  . '</td> </tr>
    <tr>     <td>50</td>    <td>11111111111111111111111111111111111111111111111111</td>       <td>' . $task->main('11111111111111111111111111111111111111111111111111') . '</td></tr>
    <tr>    <td>100</td>    <td>1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111</td>       <td>' . $task->main('1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111') . '</td></tr>
    <tr>    <td>150</td>    <td>111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111</td>       <td>' . $task->main('111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111') . '</td></tr>
</table>

<hr>

<table>
    <tr> <th>Length</th>  <th>Value</th>         <th>Result</th>                        </tr>
    <tr> <td>7</td>       <td>1111111</td>       <td>' . $task->main('1111111') . '</td></tr>
    <tr> <td>7</td>       <td>2222222</td>       <td>' . $task->main('2222222') . '</td></tr>
    <tr> <td>7</td>       <td>3333333</td>       <td>' . $task->main('3333333') . '</td></tr>
    <tr> <td>7</td>       <td>4444444</td>       <td>' . $task->main('4444444') . '</td></tr>
    <tr> <td>7</td>       <td>5555555</td>       <td>' . $task->main('5555555') . '</td></tr>
    <tr> <td>7</td>       <td>6666666</td>       <td>' . $task->main('6666666') . '</td></tr>
    <tr> <td>7</td>       <td>7777777</td>       <td>' . $task->main('7777777') . '</td></tr>
    <tr> <td>7</td>       <td>8888888</td>       <td>' . $task->main('8888888') . '</td></tr>
    <tr> <td>7</td>       <td>9999999</td>       <td>' . $task->main('9999999') . '</td></tr>
</table>

<hr>

<table>
    <tr> <th>Length</th> <th>Value</th>         <th>Result</th>                            </tr>
    <tr> <td>1</td>      <td>1</td>             <td>' . $task->main('1')           . '</td></tr>
    <tr> <td>2</td>      <td>22</td>            <td>' . $task->main('22')          . '</td></tr>
    <tr> <td>3</td>      <td>333</td>           <td>' . $task->main('333')         . '</td></tr>
    <tr> <td>4</td>      <td>4444</td>          <td>' . $task->main('4444')        . '</td></tr>
    <tr> <td>5</td>      <td>55555</td>         <td>' . $task->main('55555')       . '</td></tr>
    <tr> <td>6</td>      <td>666666</td>        <td>' . $task->main('666666')      . '</td></tr>
    <tr> <td>7</td>      <td>7777777</td>       <td>' . $task->main('7777777')     . '</td></tr>
    <tr> <td>8</td>      <td>88888888</td>      <td>' . $task->main('88888888')    . '</td></tr>
    <tr> <td>9</td>      <td>999999999</td>     <td>' . $task->main('999999999')   . '</td></tr>
</table>

<hr>

<table>
     <tr> <th>Length</th> <th>Value</th>                          <th>Result</th>                                             </tr>
     <tr> <td>4</td>      <td>5689</td>                           <td>' . $task->main('5689')                         . '</td></tr>
     <tr> <td>4</td>      <td>5.689</td>                          <td>' . $task->main('5.689')                        . '</td></tr>
     <tr> <td>4</td>      <td>568.9</td>                          <td>' . $task->main('568.9')                        . '</td></tr>
     <tr> <td>4</td>      <td>-56.89</td>                         <td>' . $task->main('-56.89')                       . '</td></tr>
     <tr> <td>18</td>     <td>111111111111111111</td>             <td>' . $task->main('111111111111111111')           . '</td></tr>
     <tr> <td>15</td>     <td>111111111111111</td>                <td>' . $task->main('111111111111111')              . '</td></tr>
     <tr> <td>28</td>     <td>1111111111111111111111111111</td>   <td>' . $task->main('1111111111111111111111111111') . '</td></tr>
</table>';

$time_finish = microtime(true);

print '<hr>';
print 'Execution time: ' . ($time_finish - $time_start);
