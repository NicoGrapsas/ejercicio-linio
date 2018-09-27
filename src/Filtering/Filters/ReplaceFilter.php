<?php

namespace Linio\Filtering\Filters;

class ReplaceFilter {
    
    private $newData;
    
    function __construct($replace) {
        $this->newData = $replace;
    }

    public function execute($data) {
        return $this->newData;
    }
}

?>