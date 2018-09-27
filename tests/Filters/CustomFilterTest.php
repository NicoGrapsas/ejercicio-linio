<?php

namespace Tests;

use Linio\Filtering\Filters\CustomFilter;
use PHPUnit\Framework\TestCase;

class CustomFilterTest extends TestCase
{
    public function testExecuteOutputOk() : void {
        $customFilter = new CustomFilter(function($data){ return $data . 'Yes!'; });
        $output = $customFilter->execute('custom works? ');

        $this->assertEquals('custom works? Yes!', $output);
    }
}

?>