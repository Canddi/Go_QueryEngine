<?php

namespace GoQueryEngine\Traits;

use Exception;

class Test_WhereOperatorEquals
{
    use TraitOperatorEquals;
}

class WhereOperatorEqualsTest extends \TestCase
{
    function testEquals()
    {
        $modelTestOperator = new Test_WhereOperatorEquals();
        $strTestValue = 'testingValue';

        $modelTestOperator->equals($strTestValue);

        $this->assertEquals(
            $strTestValue,
            $modelTestOperator->_arrWhere['equals']
        );
    }
}
