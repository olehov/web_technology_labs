<html>
    <head>
    </head>
    <body>
        <h1>
            <?php
                echo("СП-41 Гриців Олег Миколайович<br>");
                echo("File created 27/11/2022<br>");
                echo 'Today’s date is <b>' . date('d/m/Y') . '</b> and it’s a <b>'.date('l').'</b> today!';
            ?>
        </h1>
        <form action="lab_15.php" method="post">
            <label for="url">Введіть URL для перевірки</label><br>
            <input type="text" name="url"><br>
            <button type="submit">Відправити</button>
            </script>
        </form>
        <br><br>
        <?php
            function validate_url($url) {
                if (filter_var($url, FILTER_VALIDATE_URL)) {
                    if(preg_match( "/^(https?:\/\/)?(([\da-z\.-]{2,800})+)\.([a-z\]*{2,6})([\/w.-]*)*\/?$/" ,$url)){
                        echo "<strong>$url</strong> is a valid URL <br>";
                      }
                      else{
                        echo "<strong>$url</strong> is not a valid URL <br>";
                      }
                } else {
                    echo "<strong>$url</strong> is not a valid URL <br>";
                }
            }
            
            validate_url($_POST['url']);
        ?>
        <br><br>
        
    </body>
</html>