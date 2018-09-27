<?php

namespace Linio\Filtering\Rules;

class NotTypeRule {

    private $type;

    function __construct(string $type) {
        $this->type = $type;
    }

    public function test($n): bool {
        return (gettype($n) != $this->type);
    }
}

?>