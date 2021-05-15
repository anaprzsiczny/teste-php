<?php
class Field {

  public $fieldName = "Gênero";

  public function getValues() {

    $values = ["Feminino" => "female", "Masculino" => "male", "Outro" => "other"];

    return $values;
  }
} 
?>

<html>
<body>

  <form>
    <label for="name">Nome completo: </label>
    <input type="text" name="name"/>
    <label for="email">E-mail: </label>
    <input type="text" name="email"/>
    <?php 
      $field = new Field();
      echo "<label> {$field->fieldName} </label>";
      echo "<select>";
      foreach ($field->getValues() as $name => $value) {
        echo "<option value={$value}>{$name}</option>";
      }
      echo "</select>";
    ?>
    <label for="login">Login: </label>
    <input type="text" name="login"/>
    <label for="password">Senha: </label>
    <input type="password" name="password"/>

    <button type="submit">Enviar</button>

  </form>

</body>
</html>