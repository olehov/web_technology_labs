<html>
    <head>
    </head>
    <body>
        <h1>
            <?php
                echo("СП-41 Гриців Олег Миколайович<br>");
                echo("File created 22/11/2022<br>");
                echo 'Today’s date is <b>' . date('d/m/Y') . '</b> and it’s a <b>'.date('l').'</b> today!';
            ?>
        </h1>
        <img src="images/formula.png"><br><br>
        <?php
            $d = [6,8,12,-5,4,3,-8,1,8,5];
            $d1 = array();

            function my_array_product($d, $arrayProduct){
                echo "<div> Добуток масиву дорівнює: $arrayProduct <br>
                    </div>";
                if($arrayProduct < 0){
                    $arrayProduct *= -1;
                    $s = pow($arrayProduct, 1/3);
                    $s *=-1;
                    echo "<div>Корінь кубічний масиву дорівнює: $s <br> <br>
                        </div>";
                    return $s;
                }else{
                    $s = sqrt($arrayProduct);
                    echo "<div>Корінь квадратний масиву дорівнює: $s <br> <br>
                        </div>";
                    return $s;
                }
            }

            function new_array_product($d, $arrayProduct, $d1){
                $p = 1;
                for($i = 0; $i < 10; $i++){
                    $p *= $d[$i] * $arrayProduct;
                    array_push($d1, $p);
                    echo $p." ";
                }
                echo "<div> <br> </div>";
                return $d1;
            }

            function count_minus_values($d1){
                echo "minus values: ";
                for($i = 0; $i < 10; $i++){
                    if($d1[$i] < 0){
                        echo $d1[$i].", ";
                    }
                }
                echo "<br> index: ";
                for($i = 0; $i < 10; $i++){
                    if($d1[$i] < 0){
                        echo $i.", ";
                    }
                }
                echo "<br>";

            }



            $arrayProduct = array_product($d);
            $s = my_array_product($d,$arrayProduct);
            $d1 = new_array_product($d,$s, $d1);
            count_minus_values($d1);
        ?>
    </body>
</html>