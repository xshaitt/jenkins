<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2018/4/4
 * Time: 下午3:56
 */

require_once './vendor/autoload.php';

class DemoTest extends PHPUnit_Framework_TestCase
{
    public function testPass()
    {
        $this->assertTrue(true);
    }

    public function testFail()
    {
        $this->assertFalse(false);
    }
}