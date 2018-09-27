<?php

namespace Tests;

use Linio\Filtering\Rules\MultipleRule;
use PHPUnit\Framework\TestCase;

class MultipleRuleTest extends TestCase
{
    public function testExecuteOutputOk() : void {
        $rule = new MultipleRule([5, 3, 2]);
        $output = $rule->test(30);
        $this->assertTrue($output);
    }
}

?>