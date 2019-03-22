<?php
if($_SESSION){
    header("Location: index.php");
    exit();
}
?>
<html>
    <body>
        <form>
            <label>Login:<input type="text"></label>
            <label>Senha:<input type="password"></label>
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>