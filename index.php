<?php
include("config.php");
include("reactions.php");

$getReactions = Reactions::getReactions();
//uncomment de volgende regel om te kijken hoe de array van je reactions eruit ziet
// echo "<pre>".var_dump($getReactions)."</pre>";

if(!empty($_POST)){

    //dit is een voorbeeld array.  Deze waardes moeten erin staan.
    $postArray = [
        'name' => $_POST['naam'],
        'email' => "ieniminie@sesamstraat.nl",
        'message' => $_POST['message']
    ];


    $setReaction = Reactions::setReaction($postArray);

    if(isset($setReaction['error']) && $setReaction['error'] != ''){
        prettyDump($setReaction['error']);
    }
    

}
$getReactions = Reactions::getReactions();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube remake</title>


<style>

.bericht {
    background: white;
    box-shadow: 2px 2px 2px black;
    border-radius: 2px;
    padding: 10px;
    margin:10px;
    font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}


.message {
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%, -50%);
width: 500px;

}


.inputName{
    border:solid 2px;
padding: 2px;
font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.vlak{
     width: 900px;
     height: 30px;
    border:solid 3px;
}
.versturen{
    border:solid 2px;
    
}

    </style>
</head>
<body>
<iframe width="900" height="400" src="https://www.youtube.com/embed/BuNBLjJzRoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>



<h2> 90201 feat Kacey Hill test</h2>
<form action="" method="post">
 <input class="inputName" type="text"placeholder ="..vul hier je naam in" name="naam">
 <br>
 <textarea class="vlak" name="message" placeholder ="..vul hier je reactie in" cols="30" rows="10"></textarea>
 <br>
 <input class="versturen" type="submit" value="send">
 <br>
    </form>


<?php
//echo "<pre>".var_dump($getReactions)."</pre>";
echo ("<h2>Er zijn ".count($getReactions)." reactie</h2>");
for ($i=0; $i < count($getReactions); $i++){
    echo("<div class='bericht'>");
    echo($getReactions[$i] ['name']. "--");
    echo($getReactions[$i] ['message']. "<br>");
    echo("</div>");
}

//echo ("<h2>". count ($getReactions)."</h2>");

?>


</body>
</html>

<?php
$con->close();
?>

