<?php
session_start();
?>

<html>
<body>
<style>
  body{
font-family: Arial, Helvetica, sans-serif;
background: linear-gradient(45deg, gray, black);
text-align: center;
color: white;
  }
  .a{
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0,0,0,0);
  }
 </style>
<center>
    olá,<?php
    if(isset($_SESSION['nome'])==null){
    ?> visitante
    <a href="login.php">Login</a>
    <?php } else{
       echo $_SESSION['nome'];?>
       <a href="cadastrar.php">Cadastrar</a><br>
       <a href="logout.php">Sair</a>
       <a href="alterarsenha.php">alterar senha</a><br>
        <a href="lista.php">lista de usuários</a><br>
       <?php } ?>
<center>
</body>



</html>