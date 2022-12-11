
<?php

function intToRoman($num)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $Val = '';
    while ($num > 0) {
        foreach ($map as $roman => $int) {
            if ($num >= $int) {
                $num -= $int;
                $Val .= $roman;
                break;
            }
        }
    }
    return $Val;
}

echo(intToRoman(4))

?>