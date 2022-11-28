<html>
    <head>
    </head>
    <body>
        <h1>
            <?php
                echo("СП-41 Гриців Олег Миколайович<br>");
                echo("File created 21/11/2022<br>");
                echo 'Today’s date is <b>' . date('d/m/Y') . '</b> and it’s a <b>'.date('l').'</b> today!';
            ?>
        </h1>
        <img src="image.png" alt="formula" width="300" height="40">
        <?php

            $iW="10";
            $iH="5";
            $cr = 0;
            $cg = 0;
            $cb = 251;
            $a=array(1,3,5,7,9,11,13,15,17,19);
            $b=array(2,6,10,14,18,22,26,30,34,38);
            $c=array(5,3,1,7,4,9,5,8,15,10);
            $x=array(3,7,10,5,6,9,6,7,9,5);

            function y($a, $b, $c, $x, $e){
                return $a * $b * $c + sqrt($x) + pow($e, $x) + tan(min($a, $b, $c));
            }

            function change_color(&$cr, &$cg, &$cb){
                $cb -=7;
                if($cr <= 0 and $cg <= 0 and $cb <= 0){
                    $cr = 255;
                    $cg = 255;
                    $cb = 255;
                }else if($cg <= 0 and $cb <= 0){
                    $cr -=1;
                    $cg = 255;
                    $cb = 255;
                }else if($cb <= 0){
                    $cg -=1;
                    $cb = 255;
                }
            }
            //colors

            $divWidth="40";$divHeight="12";
            for($i=0;$i<10;$i++) {
               $y1=y($a[$i],$b[$i],$c[$i],$x[$i],$i);

               change_color($cr, $cg, $cb);

                echo "<div style='width:$divWidth;height:$divHeight;background-color: rgba($cr,$cg,$cb,0.8); margin: 5px'>
                 $y1
                <br>
            </div>";
                $divWidth=$divWidth+$iW;
                $divHeight=$divHeight+$iH;
            }

            $divWidth="40";$divHeight="12";$i=0;
            while ($i<10) {
                $y1=y($a[$i],$b[$i],$c[$i],$x[$i],$i);

                change_color($cr, $cg, $cb);

                echo "<div style='width:$divWidth;height:$divHeight;background-color: rgba($cr,$cg,$cb,0.8); margin: 5px'>
                 $y1
                <br>
            </div>";
                $divWidth = $divWidth + $iW;
                $divHeight = $divHeight + $iH;
                $i++;
            }
            $divWidth="40";$divHeight="12";$i=0;
            do {
                $y1=y($a[$i],$b[$i],$c[$i],$x[$i],$i);

                change_color($cr, $cg, $cb);

                echo "<div style='width:$divWidth;height:$divHeight;background-color: rgba($cr,$cg,$cb,0.8); margin: 5px'>
                 $y1
                <br>
            </div>";
                $divWidth = $divWidth + $iW;
                $divHeight = $divHeight + $iH;
                $i++;
            }while ($i<10);
        ?>
    </body>
</html>
