<html>
<body>

<?php
    $location = [
        "Brasil" => "Brasília", 
        "EUA" => "Washington", 
        "Argentina" => "Buenos Aires", 
        "França" => "Paris", 
        "Japão" => "Tokio"
    ];
    
    asort($location);
    
    foreach($location as $country => $capital) {
    	echo "A capital do {$country} é {$capital}.<br/>";
    }
?> 

</body>
</html>