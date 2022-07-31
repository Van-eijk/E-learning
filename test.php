<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>    <?php echo($_POST["pseudo"] * $_POST["nom"]); ?> </h1>
    <h1>Formulaire</h1>
    <form action="test.php" method="POST">
        <input type="text" name="pseudo" placeholder="pseudo"> <br>
        <input type="text" name="nom" placeholder="nom">

        <input type="submit" value="send" name="send">
    </form>
</body>
</html>


<?php 

/*$val = 0;


//echo($val);

if($_POST["send"]){
    $val = $_POST["pseudo"] + $_POST["nom"];
}*/



?>