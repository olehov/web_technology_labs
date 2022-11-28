<html>
    <head>
    </head>
    <body>
        <div>
            <h1>
                <?php
                    echo("СП-41 Гриців Олег Миколайович<br>");
                    echo("File created 23/11/2022<br>");
                    echo 'Today’s date is <b>' . date('d/m/Y') . '</b> and it’s a <b>'.date('l').'</b> today!';
                ?>
            </h1>
            <img src="images/matrix.png" alt="matrix">
            <img src="images/task.png" alt="task">
            <br>
        </div>
        <div>
            <h3>
                <?php
                    function new_matrix($d, $h, $w){
                        $d1 = array(array(), array(), array());
                        $e = 0;
                        $e1 = 0;
                        for($i = 0; $i < $h; $i++){
                            for($j = 0; $j < $w; $j++){
                                if($d[$i][$j] < -10){
                                    $e = $d[$i][$j];
                                    echo "Максимально від'ємний елемент $e <br>";
                                }
                            }
                        }
                        if($e == 0){
                            for($i = 0; $i < $h; $i++){
                                for($j = 0; $j < $w; $j++){
                                    $e1 = $d[$i][$j];
                                    if($e1 < 0){
                                        $e1 = $e1 *(-1);
                                        $e1 = pow($e1,1/3);
                                        $e1 = $e1 *(-1);
                                    }else{
                                        $e1 = pow($e1, 1/3);
                                    }
                                    $e1 = round($e1, 10);
                                    $d1[$i][$j] = $e1;
                                    echo "  | ".$e1." ";
                                }
                                echo "| <br>";
                            }
                        } else{
                            for($i = 0; $i < $h; $i++){
                                for($j = 0; $j < $w; $j++){
                                    $e1 = $d[$i][$j];
                                    $e1 = pow($e1, 2);
                                    $e1 = round($e1, 10);
                                    $d1[$i][$j] = $e1;
                                    echo "  | ".$e1." ";
                                }
                                echo "| <br>";
                            }
                        }
                        echo "<br>";
                        return $d1;
                    }

                    function matrix_two_line_product($d1, $lineOneNumber, $lineTwoNumber){
                        return array_product($d1[$lineOneNumber]) * array_product($d1[$lineTwoNumber]);
                    }
                    
                    function matrix_row_sum($rowOne, $rowTwo){
                        if(($rowOne and $rowTwo) > 0){
                            return array_sum($rowOne) + array_sum($rowTwo);
                        }else{
                            return "One or two array is nul <br>";
                        }
                    }

                    function matrix_one_row_sum($rowOne){
                        return array_sum($rowOne);
                    }

                    $d = array(
                        array(0.2, -7.1, -3.5, 4.1),
                        array(2.4, -1.7, 3.1, 2.2),
                        array(-8.3, 4.1, -2.2, -1.7)
                        );
                    $h = 3;
                    $w = 4;
                    $d1 = new_matrix($d, $h, $w);
                    $product = matrix_two_line_product($d1, 0, 1);
                    $twoRowsSum = matrix_row_sum(array($d1[0][0], $d1[1][0], $d1[2][0]), array($d1[0][1], $d1[1][1], $d1[2][1]));
                    $oneRowSum = matrix_one_row_sum(array($d1[0][1], $d1[1][1], $d1[2][1]));
                    $min = min($product, $twoRowsSum, $oneRowSum);
                    $degree = pow($min, 5);
                    echo "<div>Добуток елементів першого і другого рядків: $product <br></div>";
                    echo "<div>Сума елементів першого і другого стовпчиків: $twoRowsSum <br></div>";
                    echo "<div>Сума елементівдругого стовпчика: $oneRowSum <br></div>";
                    echo "<div>Мінімальне значення $min в 5 степені дорівнює $degree <br></div>";

                ?>
            </h3>
        </div>  
    </body>
</html>