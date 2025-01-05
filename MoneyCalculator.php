<?php

namespace App\Traits;

/**
 * Money Calculator:
 * functions to do money calculation for
 * more number precision coz it's very
 * sensitive and important.
 *
 *   Here’s a list of operations available in the BCMath library
 *   that is for arithmetic to ensure precision:
 *   نستعمل دوال هذه المكتبة من أجل التحقق من دقة
 *   الاعداد في الجزء العشري نظرا لحساسية المبالغ المالية
 *        Addition: bcadd()
 *        Subtraction: bcsub()
 *        Multiplication: bcmul()
 *        Division: bcdiv()
 *        Modulus: bcmod()
 *        Exponentiation: bcpow()
 *        Square Root: bcsqrt()
 *        Comparison: bccomp()
 *        Power Modulus: bcpowmod()
 *
 *
 *  MONEY_DECIMAL_PRECISION is 2
 */

trait MoneyCalculator
{

    /**
     * Subtraction Money
     */
    public function subtractMoney($a , $b) : string
    {
        return bcsub($a, $b,2);
    }

    /**
     * Addition Money
     */
    public function addMoney($a , $b) : string
    {
        return bcadd($a, $b,2);
    }

    /**
     * Multiplication Money
     */
    public function multiplyMoney($a , $b) : string
    {
        return bcmul($a, $b,2);
    }

    /**
     * Division Money
     */
    public function divideMoney($a , $b) : string
    {
        return bcdiv($a, $b,2);
    }

    /**
     * Modulus Money
     */
    public function modulusMoney($a , $b) : string
    {
        return bcmod($a, $b,2);
    }

    /**
     * Comparison Money
     */
    public function compareMoney($a , $b) : string
    {
        return bccomp($a, $b,2);
    }



}
