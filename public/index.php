<?php

    require __DIR__ . '/../vendor/autoload.php';

    use Linio\Filtering\LinioFilter;

    function is_command_line() {
        return (strtoupper(php_sapi_name()) ==  'CLI');
    }

    function html_print($something) {
        echo $something;
        echo '<br>';    
    }

    function cli_print($something) {
        echo $something . "\n";
    }

    $linio = new LinioFilter();
    $results = $linio->execute(range(1, 100));
    
    $printer = is_command_line() ? 'cli_print' : 'html_print';
    array_map($printer, $results);


?>