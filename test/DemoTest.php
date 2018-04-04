<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2018/4/4
 * Time: 下午3:56
 */

class DemoTest extends PHPUnit_Framework_TestCase {
    public function testPass() {
        $this->assertTrue(true);
    }
    public function testFail() {
        $this->assertFalse(false);
    }
}