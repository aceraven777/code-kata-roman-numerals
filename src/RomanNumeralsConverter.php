<?php

class RomanNumeralsConverter
{

    public function convert($number)
    {
        $roman_numeral = '';

        $dictionary = [
            100 => 'C',
            50 => 'L',
            10 => 'X',
            5 => 'V',
            1 => 'I',
        ];

        foreach ($dictionary as $key => $value) {
            if ($number >= $key) {
                $quotient = (int) ($number / $key);
                $roman_numeral .= str_repeat($value, $quotient );
                $number -= $quotient * $key;
            }

            if (strpos($key, '5') !== false) {
                $ones = (int) ($key / 5);
            } else {
                $ones = (int) ($key / 10);
            }

            if (($number + $ones) >= $key) {
                $roman_numeral .= $dictionary[$ones].$value;
                $number -= $key - $ones;
            }
        }

        return $roman_numeral;
    }

}
