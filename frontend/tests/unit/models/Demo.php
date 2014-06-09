<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 2014-06-07
 * Time: 20:47
 */

namespace frontend\tests\unit\models;


class Demo extends \PHPUnit_Framework_TestCase {
    public function setUp(){
    }
    public function tearDown(){
    }
    public function testTableName(){
        $this->assertTrue("Hotlist"=="HotList");
    }
}
?>