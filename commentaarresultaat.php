<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$naam = $email = $commentaar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
$name = $_POST["naam"];

$email = $_POST["email"];

$commentaar = $_POST["commentaar"];
if (empty($name) || empty($email)) {

    echo "Naam en email zijn verplicht";
    
    }
    elseif (empty($commentaar)) {

        echo "U heeft geen commentaar opgegeven";
        
        
    } else {

        echo "Naam: " . $name;
        
        echo "<br>";
        
        echo "Email: " . $email;
        
        echo "<br>";
        
        echo "Commentaar: " . $commentaar;
        
        }
      

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>