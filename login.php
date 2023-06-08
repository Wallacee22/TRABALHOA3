<?

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
<style>
body{
background-image:linear-gradient(45deg, cyan, yellow);
}
</style>
</head>
<body>
    <center>
        <h1>LOGIN</h1>

    <form id="login" action="logado.php" method="POST">
            Login: <input type="text" name="login"> <br>
            Senha: <input type="password" name="senha" ><br><br>
            <input type="submit" id="entrar" value="Entrar">
        </form>
    </center> 
</body>
</html>