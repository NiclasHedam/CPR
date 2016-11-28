<?php

require_once __DIR__ . '/../vendor/autoload.php';

use NiclasHedam\CPR;

class CPRTest extends \PHPUnit_Framework_TestCase
{
    var $cpr1;
    var $cpr2;
    var $cpr3;

    public function __construct(){
        $this->cpr1 = new CPR("2412958899");
        $this->cpr2 = new CPR("0401040986");
        $this->cpr3 = new CPR("2412951234");
    }

    public function testValid(){
        $this->assertTrue($this->cpr1->valid());
        $this->assertTrue($this->cpr2->valid());
        $this->assertFalse($this->cpr3->valid());
    }

    public function testGender(){
        $this->assertTrue($this->cpr1->isMale());
        $this->assertFalse($this->cpr1->isFemale());
        $this->assertTrue($this->cpr2->isFemale());
        $this->assertFalse($this->cpr2->isMale());
    }

    public function testBirthday(){
        $this->assertEquals($this->cpr1->birthday(), new \DateTime('1995-12-24 00:00:00'));
        $this->assertEquals($this->cpr2->birthday(), new \DateTime('2004-01-04 00:00:00'));
    }
}
