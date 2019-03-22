<?php
if($_SESSION){
    header("Location: index.php");
    exit();
}
if($_POST['LOGIN']){
    require_once("functions/logar.php");
}
?>
<html>
    <body>
        <form>
            <label>Login:<input name="LOGIN" type="text"></label>
            <label>Senha:<input name="PASSWORD" type="password"></label>
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>