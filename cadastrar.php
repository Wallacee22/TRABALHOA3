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
<form id="cadastro" action="cadastro.php" method="POST">
  nome: <input type="text" name="nome" required><br><br>
  login: <input type="text" name="login" required><br><br>
  senha: <input type="password" name="senha" required><br><br>
  <input type="submit" id="cadastrar" value="cadastrar">
</form>

    </center>
</body>
</html>
