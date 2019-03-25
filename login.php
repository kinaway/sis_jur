<?php
    $ret = true;
    $login = '';
if(isset($_SESSION['LOGIN'])){
    header("Location: index.php");
    exit();
}
if(isset($_POST['LOGIN'])){
    require_once("functions/logar.php");
    $login = $_POST['LOGIN'];
}
?>
<html>
    <body>
        <form method="POST">
            <label>Login:<input name="LOGIN" value="<?php echo $login;?>" type="text"></label>
            <label>Senha:<input name="PASSWORD" type="password"></label>
            <input type="submit" value="Entrar">
        </form>
        <?php if(!$ret){?>
        <p style="color:red;">Login e Senha não conferem.</p>
        <?php } ?>
    </body>
</html>