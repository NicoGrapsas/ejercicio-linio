<?php

namespace Tests;

use Linio\Filtering\Rules\NotTypeRule;
use PHPUnit\Framework\TestCase;

class NotTypeRuleTest extends TestCase
{
    public function testExecuteOutputOk() : void {
        $rule = new NotTypeRule('array');
        $output = $rule->test([]);
        $this->assertFalse($output);
    }
}

?>