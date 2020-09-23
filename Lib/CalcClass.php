<?php
namespace Lib;
interface Oper {
    public function calc($x, $y);

}

class Summ implements Oper {
    public function calc($x, $y) {
        return $x+$y;
    }
}

class Malty implements Oper {
    public function calc($x, $y) {
        return $x*$y;
    }
}

class Subtract implements Oper {
    public function calc($x, $y) {
        return $x-$y;
    }
}

class Division implements Oper {
    public function calc($x, $y) {
        return $x/$y;
    }
}

class Exponent implements Oper {
    public function calc($x, $y) {
        return pow($x, $y);
    }
}

class Calc {
    public $x;
    public $y;
    public function Calculate (Oper $oper) {
        return $oper->calc($this -> x, $this -> y);
    }
}

$calc = new Calc();
$calc -> x = 30;
$calc -> y = 5;
$sum = new Summ;
$malty = new Malty;
$subtract = new Subtract;
$division = new Division;
$exponent = new Exponent;


echo $calc -> Calculate($sum).'<br>';
echo $calc -> Calculate($malty).'<br>';
echo $calc -> Calculate($subtract).'<br>';
echo $calc -> Calculate($division).'<br>';
echo $calc -> Calculate($exponent).'<br>';