<?php

namespace GoQueryEngine\Enum;

class OutputFieldTest extends \TestCase
{

    function testGetAllowedValues()
    {
        $this->assertEquals(
            [
                EnumOutputField::OUTPUT_HOSTNAME,
                EnumOutputField::OUTPUT_EMPLOYEE_RANGE,
                EnumOutputfield::OUTPUT_LOCATION,
                EnumOutputField::OUTPUT_TRADING_POSTCODE,
                EnumOutputField::OUTPUT_REGISTERED_POSTCODE,
                EnumOutputField::OUTPUT_MASTER_SECTORS,
                EnumOutputField::OUTPUT_JOB_ROLES,
                EnumOutputField::OUTPUT_SICCODES,
                EnumOutputField::OUTPUT_TRADING_CITY,
                EnumOutputField::OUTPUT_REGISTERED_CITY,
                EnumOutputField::OUTPUT_INCORPORATION_DATE
            ],
            EnumOutputField::getAllowedValues()
        );
    }

    function testReturnedValues()
    {
        $this->assertEquals(
            'hostname',
            EnumOutputField::OUTPUT_HOSTNAME
        );
        $this->assertEquals(
            'noemployeerange',
            EnumOutputField::OUTPUT_EMPLOYEE_RANGE
        );
        $this->assertEquals(
            'location',
            EnumOutputField::OUTPUT_LOCATION
        );
        $this->assertEquals(
            'tradingpostcode',
            EnumOutputField::OUTPUT_TRADING_POSTCODE
        );
        $this->assertEquals(
            'regofficepostcode',
            EnumOutputField::OUTPUT_REGISTERED_POSTCODE
        );
        $this->assertEquals(
            'mastersectors',
            EnumOutputField::OUTPUT_MASTER_SECTORS
        );
        $this->assertEquals(
            'normaljobroles',
            EnumOutputField::OUTPUT_JOB_ROLES
        );
        $this->assertEquals(
            'siccodes',
            EnumOutputField::OUTPUT_SICCODES
        );
        $this->assertEquals(
            'tradingcity',
            EnumOutputField::OUTPUT_TRADING_CITY
        );
        $this->assertEquals(
            'regofficecity',
            EnumOutputField::OUTPUT_REGISTERED_CITY
        );
        $this->assertEquals(
            'incorporationdate',
            EnumOutputField::OUTPUT_INCORPORATION_DATE
        );
    }
}
