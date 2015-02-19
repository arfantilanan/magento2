<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\View\Layout\Argument\Interpreter;

class PassthroughTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Passthrough
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Passthrough();
    }

    public function testEvaluate()
    {
        $input = ['data' => 'some/value'];
        $expected = ['data' => 'some/value'];

        $actual = $this->_model->evaluate($input);
        $this->assertSame($expected, $actual);
    }
}