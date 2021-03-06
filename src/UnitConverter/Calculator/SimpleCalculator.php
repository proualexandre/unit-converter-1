<?php declare(strict_types = 1);

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2018 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UnitConverter\Calculator;

/**
 * A basic implementation of the CalculatorInterface for performing
 * mathematical operations with.
 *
 * @NOTE Due to the way that computers handle floating decimals, the
 * results that this calculator yields may be less than accurate. To increase
 * the accuracy of your results, you should round to more decimal places.
 *
 * @see UnitConverter\UnitConverter::convert() Increase rounding places on the fly.
 *
 * @version 1.0.0
 * @since 0.4.1
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
class SimpleCalculator extends AbstractCalculator
{
    public function add ($leftOperand, $rightOperand)
    {
        return ($leftOperand + $rightOperand);
    }

    public function sub ($leftOperand, $rightOperand)
    {
        return ($leftOperand - $rightOperand);
    }

    public function mul ($leftOperand, $rightOperand)
    {
        return ($leftOperand * $rightOperand);
    }

    public function div ($dividend, $divisor)
    {
        return ($dividend / $divisor);
    }

    public function mod ($dividend, $modulus)
    {
        return ($dividend % $modulus);
    }

    public function pow ($base, $exponent)
    {
        return pow($base, $exponent);
    }
}
