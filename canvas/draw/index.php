<?php 
    require('../classes.php');

    $x = $_POST['x'];
    $y = $_POST['y'];

    $maxIndex = min(count($x), count($y));

    function pointToParams(Point $point) : string {
        return $point->getX().", ".$point->getY();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <canvas
        id="canvas"
        width="<?php echo max($x); ?>px"
        height="<?php echo max($y); ?>px"
    >

    </canvas>

    <script>
        
        const ctx = document.getElementById('canvas').getContext('2d');

        <?php
            $point = new Point($x[0], $y[0]);
        ?>

        ctx.beginPath();

        ctx.moveTo(
            <?php echo pointToParams($point); ?>
        );
        
        <?php
            for($i = 0; $i < $maxIndex; ++$i) {
                $point = new Point($x[$i], $y[$i]);

                echo "ctx.lineTo(".pointToParams($point).");";
            }
        ?>

        ctx.closePath();
        ctx.stroke();
    </script>
</body>
</html>