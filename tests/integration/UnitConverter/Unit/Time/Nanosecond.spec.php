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

namespace UnitConverter\Tests\Integration\Unit\Time;

use PHPUnit\Framework\TestCase;
use UnitConverter\UnitConverter;
use UnitConverter\Calculator\SimpleCalculator;
use UnitConverter\Registry\UnitRegistry;
use UnitConverter\Unit\Time\Second;
use UnitConverter\Unit\Time\Nanosecond;

/**
 * Ensure that a nanosecond is infact, a nanosecond.
 *
 * @covers UnitConverter\Unit\Time\Nanosecond
 * @uses UnitConverter\Unit\Time\Second
 * @uses UnitConverter\Unit\AbstractUnit
 * @uses UnitConverter\UnitConverter
 * @uses UnitConverter\Calculator\SimpleCalculator
 * @uses UnitConverter\Calculator\AbstractCalculator
 * @uses UnitConverter\Registry\UnitRegistry
 */
class NanosecondSpec extends TestCase
{
    protected function setUp ()
    {
        $this->converter = new UnitConverter(
            new UnitRegistry(array(
                new Second,
                new Nanosecond,
            )),
            new SimpleCalculator
        );
    }

    protected function tearDown ()
    {
        unset($this->converter);
    }

    /**
     * @test
     */
    public function assert1NanosecondIs0decimal000000001Seconds ()
    {
        $expected = 0.000000001;
        $actual = $this->converter
            ->convert(1, 9)
            ->from("ns")
            ->to("s")
            ;

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function assertThatANanosecondIsASubmultipleSIUnit ()
    {
        $result = (new Nanosecond)->isSubmultipleSiUnit();
        $this->assertTrue($result);
        $this->assertInternalType("bool", $result);
    }
}
