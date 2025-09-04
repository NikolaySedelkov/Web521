<?php
    $countListItem = rand(5, 50);
?>

<?php
    for($i = 0; ;++$i) {
        for($j = 0; ; ++$j) {
            echo "$i + $j = ".($i + $j);
            if($i + $j == 11) break(2);
            
        }
    }
?>
<hr/>
<?php 
    while(true) {
        $number = rand(0, 100);
        echo "$number\t";

        if($number == 81) break;
    }
?>

<hr/>

<?php
    for(
        $prevprev = 1, $prev = 1, $t; 
        $prevprev < 100;
        $t = $prev, $prev += $prevprev, $prevprev = $t
    ) {
        echo "$prevprev\t";
    }
?>

<ul>
    <?php 
        for($i = $countListItem; $i > 0; --$i) {
            echo "<li>$i</li>";
        }
    ?>
</ul>