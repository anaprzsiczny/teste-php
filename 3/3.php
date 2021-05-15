<html>
<body>

<?php
	
  function getFileExtension(){

    $files = ["music.mp4", "video.mov", "imagem.jpeg"];
    $position = 0;
    $break_point = ".";
    $number = count($files);
    
    for($x = 0; $x < $number; $x++) {
      $position = strpos($files[$x], $break_point);
      $files[$x] = substr($files[$x], $position);
    }

    return $files;
  }
    
  $result = getFileExtension();
    
  sort($result);
    
  echo "<ol>";
    foreach($result as $extension){
      echo "<li>{$extension}</li><br/>";
    }
  echo "</ol>";    
?> 

</body>
</html>