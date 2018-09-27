<?php

    namespace Linio\Filtering;

    class FilterQueue {
        private $queue = [];
        
        public function addFilter($rule, $filter) {
            $this->queue[] = [$rule, $filter];
        }

        public function execute($data) {
            $RULE = 0;
            $FILTER = 1;
            foreach ($this->queue as $task) {
                $apply = $task[$RULE]->test($data);
                if ($apply) {
                    $data = $task[$FILTER]->execute($data);
                    break; 
                }
            }
            return $data;
        }
    }

?>