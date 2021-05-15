<html>
<body>

<?php

  function createCsv($xml, $f) {
    foreach($xml->children() as $item) {
      $put_array = [$item->getName(), $item];
      fputcsv($f, $put_array);
    }
  }

  $xml=simplexml_load_file("note.xml");
  $f = fopen("test.csv", "w");
  createCsv($xml, $f);
  fclose($f);
  echo "<p>Arquivo criado com sucesso</p>";
?> 

</body>
</html>