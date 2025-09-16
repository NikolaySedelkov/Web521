<?php
    require('../../classes.php');

    $p1 = new Point();
    $p2 = new Point();

    $p1->x = intval($_GET['x1']);
    $p1->y = intval($_GET['y1']);

    $p2->x = intval($_GET['x2']);
    $p2->y = intval($_GET['y2']);

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
        width="<?php echo max($p2->x, $p1->x); ?>px"
        height="<?php echo max($p2->y, $p1->y); ?>px"
    >

    </canvas>

    <script>
        const ctx = document.getElementById("canvas").getContext('2d');

        ctx.moveTo(
            <?php echo $p1->x.", ".$p1->y; ?>
        );

        ctx.lineTo(
            <?php echo $p2->x.", ".$p2->y; ?>
        );

        ctx.stroke();
    </script>
</body>
</html>