<?php
session_start();
?>

<html>
<body>
<center>
    olá,<?php
    if(isset($_SESSION['nome'])==null){
    ?> visitante
    <a href="login.php">Login</a>
    <?php } else{
       echo $_SESSION['nome'];?>
       <a href="cadastrar.php">Cadastrar</a><br>
       <a href="logout.php">Sair</a>
       <?php } ?>
<center>
</body>



</html>