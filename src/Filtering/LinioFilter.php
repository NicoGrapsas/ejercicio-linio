<?php

namespace Linio\Filtering;

use Linio\Filtering\FilterQueue;
use Linio\Filtering\Rules\NotTypeRule;
use Linio\Filtering\Rules\MultipleRule;
use Linio\Filtering\Filters\CustomFilter;
use Linio\Filtering\Filters\ReplaceFilter;

class LinioFilter {
    
    function __construct() {
        $this->filterQueue = new FilterQueue();
        $this->filterQueue->addFilter(new NotTypeRule('integer'), new CustomFilter(function($data){ return $data; }));
        $this->filterQueue->addFilter(new MultipleRule([3, 5]), new ReplaceFilter('Linianos'));
        $this->filterQueue->addFilter(new MultipleRule([3]), new ReplaceFilter('Linio'));
        $this->filterQueue->addFilter(new MultipleRule([5]), new ReplaceFilter('IT'));
    }

    private function executeArray($data) {
        return array_map(function($value){ 
            return $this->execute($value); 
        }, $data);
    }

    public function execute($data) {
        if (gettype($data) == 'array') { return $this->executeArray($data); }
        return $this->filterQueue->execute($data);
    }

}

?>