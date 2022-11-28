<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php
            echo("СП-41 Гриців Олег Миколайович<br>");
            echo("File created 21/11/2022<br>");
            echo 'Today’s date is <b>' . date('d/m/Y') . '</b> and it’s a <b>'.date('l').'</b> today!';
        ?></h1>
        <form action="lab_11.php" method="post">
            <label for="money">Введіть значення від 1 до 999:</label><br>
            <input type="text" name="money" min="1" max="999"><br>
            <button type="submit">Відправити</button>
            </script>
        </form>
        <h2> Результат: 
            <?php
                if(isset($_POST)){
                    $moneyvalue = $_POST['money'];
                    $moneyvalueswitch = 0;
                    $i = $moneyvalue;
                    if($i > 9 and $i < 20){
                        $moneyvalueswitch = 3;
                    }else{
                        while($i > 1){
                            $i -=10;
                            if($i == 1){
                                $moneyvalueswitch = 1;
                            }
                            if($i == 2 or $i == 3 or $i == 4){
                                $moneyvalueswitch = 2;
                                break;
                            }
                            if($i == 0 or $i == 6 or $i == 7 or $i == 8 or $i == 9){
                                $moneyvalueswitch = 3;
                            }
                        }
                    }
                    switch($moneyvalueswitch){
                        case 1:
                            echo($moneyvalue." гривня");
                            break;
                        case 2:
                            echo($moneyvalue." гривні");
                            break;
                        case 3:
                            echo($moneyvalue." гривень");
                            break;
                        default:
                            echo("Введено невірне значення");
                            break;
                    }
                }
            ?>
        </h2>
    </body>
</html>