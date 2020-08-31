<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class TestDtoCfd1 extends TestCase
{

  function testIntegerBad()
    {
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(2.4), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("2.4"), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(0.1), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("-2.4"), "Nope " . __LINE__);

        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(""), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(null), "Nope " . __LINE__);
        try {
            $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(), "Nope " . __LINE__);
            $this->assertFalse(true, "Should not get this far " . __LINE__);
        } catch (Throwable $e) {
               $this->assertTrue(true, "ok" . __LINE__);
        }
    }

  function testIntegerGood()
    {
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("2"), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("-1"), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("0"), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(2), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(0), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(-1), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(-1000), "Nope " . __LINE__);

    }



    function testWholeBad()
    {
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(2.4), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole("2.4"), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(""), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(null), "Nope " . __LINE__);
        try {
            $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(), "Nope " . __LINE__);
            $this->assertFalse(true, "Should not get this far " . __LINE__);
        } catch (Throwable $e) {
               $this->assertTrue(true, "ok" . __LINE__);
        }


        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole('-5'), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole("-1001"), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(-1), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(-1000), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(-2.3), "Nope " . __LINE__);
    }

     function testWholeGood()
    {
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(2), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsWhole("5"), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsWhole("0"), "Nope " . __LINE__);
        $this->assertTrue(\SchoolTwist\Validations\Inspect\Numeric::IsWhole(-0), "Nope " . __LINE__);

    }


}