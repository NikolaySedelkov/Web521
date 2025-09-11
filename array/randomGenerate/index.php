<?php
    $length = $_GET['length'];
    $min = $_GET['min'];
    $max = $_GET['max'];

    // Пустой массит
    $result = array(); // []

    for($i = 0; $i < $length; ++$i) {
        array_push(
            $result,
            rand($min, $max) 
        );
    }

?>

<ul>
    <?php
        foreach($result as $value) {
            echo "<li>$value</li>";
        }
    ?>
</ul>