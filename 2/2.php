<?php

  function foiMordido() {
    $num = rand(1, 100);
    if ($num % 2 == 0){
      return true;
    } else {
      return false;
    }
  }

?> 

<html>
<body>

<?php
  if(foiMordido()) {
?>
    <h1>Joãozinho mordeu o seu dedo!</h1>
<?php
  } else {
?>
    <h1>Joãozinho NÃO mordeu o seu dedo!</h1>
<?php
  }
?>

</body>
</html>