<?php

namespace Tests;

use Linio\Filtering\Filters\ReplaceFilter;
use PHPUnit\Framework\TestCase;

class ReplaceFilterTest extends TestCase
{
    public function testExecuteOutputOk() : void {
        $filter = new ReplaceFilter('new value');
        $output = $filter->execute('old value');
        $this->assertEquals('new value', $output);
    }
}

?>