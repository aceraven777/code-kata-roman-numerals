<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior {
    
    function it_calculates_roman_numeral_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    function it_calculates_roman_numeral_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_calculates_roman_numeral_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_calculates_roman_numeral_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_calculates_roman_numeral_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    function it_calculates_roman_numeral_for_7()
    {
        $this->convert(7)->shouldReturn('VII');
    }

    function it_calculates_roman_numeral_for_8()
    {
        $this->convert(8)->shouldReturn('VIII');
    }

    function it_calculates_roman_numeral_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    function it_calculates_roman_numeral_for_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }

    function it_calculates_roman_numeral_for_12()
    {
        $this->convert(12)->shouldReturn('XII');
    }

    function it_calculates_roman_numeral_for_13()
    {
        $this->convert(13)->shouldReturn('XIII');
    }

    function it_calculates_roman_numeral_for_18()
    {
        $this->convert(18)->shouldReturn('XVIII');
    }

    function it_calculates_roman_numeral_for_25()
    {
        $this->convert(25)->shouldReturn('XXV');
    }

    function it_calculates_roman_numeral_for_33()
    {
        $this->convert(33)->shouldReturn('XXXIII');
    }

    function it_calculates_roman_numeral_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }

    function it_calculates_roman_numeral_for_88()
    {
        $this->convert(88)->shouldReturn('LXXXVIII');
    }

    function it_calculates_roman_numeral_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }

    function it_calculates_roman_numeral_for_335()
    {
        $this->convert(335)->shouldReturn('CCCXXXV');
    }

    function it_calculates_roman_numeral_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    function it_calculates_roman_numeral_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    function it_calculates_roman_numeral_for_394()
    {
        $this->convert(394)->shouldReturn('CCCXCIV');
    }

}
