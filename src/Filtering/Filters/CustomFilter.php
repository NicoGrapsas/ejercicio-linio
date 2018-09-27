<?php

namespace Linio\Filtering\Filters;

class CustomFilter {
    private $lambda;

    function __construct($lambda) {
        $this->lambda = $lambda;
    }

    public function execute($data) {
        return \call_user_func($this->lambda, $data);
    }
}

?>