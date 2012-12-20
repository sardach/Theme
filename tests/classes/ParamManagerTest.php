<?php

use Foolz\Theme\ParamManager as ParamManager;

class ParamManagerTest extends PHPUnit_Framework_TestCase
{
	public function testGetParamsEmpty() 
	{
		$pm = new ParamManager();
		$this->assertEmpty($pm->getParams());
	}

	/**
	 * @expectedException \OutOfBoundsException
	 * @expectedExceptionMessage Undefined parameter.
	 */
	public function testSetGetParamThrowsOutOfBounds()
	{
		$new = new ParamManager();
		$new->getParam('herp');
	}

	public function testSetGetParam()
	{
		$arr = array('param1' => 'test', 'param2' => 'testtest');
		$new = new ParamManager($arr);

		$new->setParams($arr);
		$this->assertSame($arr, $new->getParams());
		$this->assertSame('test', $new->getParam('param1'));
		$this->assertSame('testtest', $new->getParam('param2'));
	}

	public function testSetGetParams()
	{
		$arr = array('param1' => 'test', 'param2' => 'testtest');
		$new = new ParamManager();

		$new->setParams($arr);
		$this->assertSame($arr, $new->getParams());
	}
}


