<html>
<body>

<form action="handleForm.php" method="post">
  <label for="name">Nome: </label>
  <input type="text" name="name"/>
  <label for="lastName">Sobrenome: </label>
  <input type="text" name="lastName"/>
  <label for="email">E-mail: </label>
  <input type="text" name="email"/>
  <label for="phone">Telefone: </label>
  <input type="text" name="phone"/>
  <label for="login">Login: </label>
  <input type="text" name="login"/>
  <label for="password">Senha: </label>
  <input type="password" name="password"/>

  <button type="submit">Enviar</button>

</form>

<?php  
  if(!empty($_GET['errors'])) {
    echo $_GET['errors'];
  }

  if(!empty($_GET['success'])){
    echo $_GET['success'];
  }
  
?> 

</body>
</html>