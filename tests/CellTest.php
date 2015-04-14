<?php
/**
 * @file CellTest.php
 * @author The Wass
 * @brief This file tests the Cell class
 *
 * @version 1.0 - 2015-04-14
 * * Initial version
 */
namespace TheWass\GameFramework\Tests;

use TheWass\GameFramework\Grids\Cell;
/**
 * @class CellTest
 * @author The Wass
 * @brief Collection of tests for the Cell data container
 * @description  A cell must have the following attributes:
 * * Able set and get data of any type
 * * Able to store neighboring coordinates
 * * Able to get the weights of the stored neighbors
 * Checking neighbor validity is the Grid's job.
 */
class CellTest extends \PHPUnit_Framework_TestCase
{
    private $test;
    private $stub;

    public function setUp()
    {
        $this->test = new Cell();
        $this->stub = $this getMockforAbstractClass('Coordinate');
    }

    public function dataProvider()
    {
        return array(
            array(0),
            array(1),
            array(42),
            array(-1),
            array('str'),
            array(array(1)),
            array(array(1, 'str')),
            array(new stdClass())
        );
    }

    /**
     * @brief Test setting and getting cell data using properties.
     * @dataProvider dataProvider
     */
    public function testData($data)
    {
        $this->test->property = $data;
        assertEqual($data, $this->test->property);
    }

    /**
     * @brief Test setting and getting neighbor weights.
     * @dataProvider dataProvider
     */
    public function testWeight($weight)
    {
        assertFalse($this->test->getWeight($this->stub));
        assertFalse($this->test->getWeight($this->stub));

        $this->markTestIncomplete();//INCOMPLETE!
    }

}