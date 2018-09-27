<?php

namespace Linio\Filtering\Rules;

class MultipleRule {
    private $dividers = [];

    function __construct(array $dividers) {
        $this->dividers = $dividers;
    }

    public function test(int $n): bool {
        
        $divisible = false;

        foreach ($this->dividers as $divider) {
            $divisible = (($n % $divider) == 0);
            if (!$divisible) { break; }
        }
        
        return $divisible;
    }
}

?>