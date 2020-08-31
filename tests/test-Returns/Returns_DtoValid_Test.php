<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class TestDtoCfd2 extends TestCase
{

  function testIntegerBad()
    {
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("2.4"), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(0.1), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger("-2.4"), "Nope " . __LINE__);

        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(""), "Nope " . __LINE__);
        $this->assertFalse(\SchoolTwist\Validations\Inspect\Numeric::IsInteger(null), "Nope " . __LINE__);
        try {
            $dtoValid = new \SchoolTwist\Validations\Returns\DtoValid('isValid');
            $this->assertTrue(false, "Should not get this far " . __LINE__);
        } catch (Throwable $e) {
               $this->assertTrue(true, "ok" . __LINE__);
        }

        try {
            $dtoValid = new \SchoolTwist\Validations\Returns\DtoValid();
            $this->assertTrue(false, "Should not get this far " . __LINE__);
        } catch (Throwable $e) {
               $this->assertTrue(true, "ok" . __LINE__);
        }

        try {
            $dtoValid = new \SchoolTwist\Validations\Returns\DtoValid(['isValid'=>1]);
            $this->assertTrue(false, "Should not get this far " . __LINE__);
        } catch (Throwable $e) {
               $this->assertTrue(true, "ok" . __LINE__);
        }

        try {
            $dtoValid = new \SchoolTwist\Validations\Returns\DtoValid(['isValid'=>"a"]);
            $this->assertTrue(false, "Should not get this far " . __LINE__);
        } catch (Throwable $e) {
               $this->assertTrue(true, "ok" . __LINE__);
        }
    }

  function testIntegerGood()
    {
        $dtoValid = new \SchoolTwist\Validations\Returns\DtoValid(['isValid'=>true]);
        $this->assertTrue($dtoValid->isValid, "ok " . __LINE__);

    }

     function testBad()
    {

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid();
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(1);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid([]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => null]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => "Hello"]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }


    }

    function testAlmostValide3()
    {

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => "2"]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => "1"]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => ""]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => "0"]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

         try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => 1]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }

        try {
            $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid' => 0]);
            $this->assertTrue(0, "Should not get this far. " . __LINE__);
        } catch (TypeError $e) {
            $this->assertTrue(true, "1Good - that faiiled as expected");
        }
    }

    function testVeryValid2 () {

        $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid'=>true]);
        $this->assertTrue($obj->isValid == true, "Should not get this far. ".__LINE__);


        $obj = new \SchoolTwist\Validations\Returns\DtoValid(['isValid'=>false]);
        $this->assertTrue($obj->isValid == false, "Should not get this far. ".__LINE__);


    }


}