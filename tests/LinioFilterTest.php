<?php

namespace Tests;

use Linio\Filtering\LinioFilter;
use PHPUnit\Framework\TestCase;

class LinioFilterTest extends TestCase
{
    public function testExecuteOutputOk() : void {
        $linio = new LinioFilter();

        $this->assertSame(1, $linio->execute(1));
        $this->assertSame('Linianos', $linio->execute(15));
        $this->assertSame('Linio', $linio->execute(3));
        $this->assertSame('IT', $linio->execute(5));
        $this->assertSame([1, 'Linio', 'IT', 'Linianos', 'x'], $linio->execute([1, 3, 5, 15, 'x']));
        
    }
}

?>