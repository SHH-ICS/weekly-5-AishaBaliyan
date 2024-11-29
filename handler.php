<!DOCTYPE html>
<html>
  <head>
    <title>π Calculator</title>
  </head>
  <body>
    <?php
    if (isset($_POST['j'])) {
        $input = intval($_POST['j']); 

        if ($input >= 0) { 
            $j = 1;
            $i = 0;
            for ($n = 0; $n <= $input; $n++) {
                $term = $j * (4 / (2 * $n + 1));
                $i += $term;
                $j *= -1;
            }
            echo round($i, 4); 
        } else {
            echo "Error: Please enter a non-negative number."; 
        }
    } else {
        echo "Error: No input provided."; 
    }
    ?>
  </body>
</html>
