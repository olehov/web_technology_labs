<!DOCTYPE html>
<html>
    <head>
        <title>Lab 15</title>
    </head>
    <body>
        <form action="/index.php">
            <input type="submit" value="home">
        </form>
        <form action="/lab-15/lab_15.php">
            <input type="submit" value="Go to Lab 15"><br>
        </form>
        <div>
            <form action="index15.php" method="post">
                <label>Виберіть правильну URL адресу</label><br>
                <input type="radio" id="url1" name="check1" value="https://sub.zcontest-ru.com:8080">
                <label for="url1">https://sub.zcontest-ru.com:8080</label><br>
                <input type="radio" id="url2" name="check2" value="http://www.domain-.com">
                <label for="url2">http://www.domain-.com</label><br>
                <input type="submit" value="Відправити">   
                <input type="reset" value="скинути">
            </form>
            <?php
                if($_POST['check1'] and !$_POST['check2']){
                    echo "<script>alert('Відповідь правильна')</script>";
                    $_POST['check1'] = null;
                }else if($_POST['check1'] == null and $_POST['check2'] == null){
                }else if(!$_POST['check1'] and !$_POST['check2']){
                }else{
                    echo "<script>alert('Відповідь неправильна')</script>";
                    $_POST['check1'] = null;
                }
            ?>
            <br><br>
        </div>
        <div>
            <form action="index15.php" method="post">
                <label for="login">Login</label><br>
                <input type="text" id="login" name="login"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="відправити">
                <input type="reset" value="скинути">
            </form>
            <?php
                if($_POST['login'] == "admin" and $_POST['password'] == "admin"){
                    echo "<script>alert('HELLO WORD')</script>";
                    $_POST['login'] = null;
                    $_POST['password'] = null;
                }else if($_POST['login'] == null and $_POST['password'] == null){
                }else if(!$_POST['login'] and !$_POST['password']){
                }else{
                    echo "<script>alert('Логін або пароль введено невірно')</script>";
                    $_POST['login'] = null;
                    $_POST['password'] = null;
                }
            ?>
            <br><br>
        </div>
        <div>
            <form action="index15.php">
                <label for="textLabel">Введіть своє ім'я</label><br>
                <input type="text" id="text" name="text"><br>
                <input type="submit" value="відправити">   
                <input type="reset" value="скинути">
            </form>
        </div>
        <?php
            if($_POST['text']){
                $name = $_POST['text'];
                echo "<script>alert('Привіт $name')</script>";
            }
        ?>
    </body>
</html>