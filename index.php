<?php 
    $delta = 0 ;
    $x0 = 0 ;
    $x1 = 0 ;
    $x2 = 0 ;
    $a = 0;
    $b = 0;
    $c = 0;
    $noSolution = "Pas de solution";
    $errorNumber = "";
    

    if(isset($_POST["resoudre"])){

        // Récupération des valeurs entrées par l'utilisateur

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        // Conversion des valeurs entrées par l'utilisateur en des entiers 

        settype($a,"integer");
        settype($b,"integer");
        settype($c,"integer");


        $delta = $b * $b - 4 * $a * $c ; // Calcul du discriminant

            if($delta == 0){
                $x0 = (-1 * $b)/ 2 * $a ;
            }

            else if($delta > 0){
                $x1 = (-1 * $b - sqrt($delta))/ 2* $a ;
                $x2 = (-1 * $b + sqrt($delta))/ 2* $a ;

            }
            else{

                $noSolution = "Pas de solution car, le distriminant est négatif !";


            } 

    }

?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div id="main" >
        <div id="board">
            <div id="date">
                <p id="mainDate"></p>
            </div>

            <h3>RESOLUTION DES EQUATIONS DU 2nd DEGRE SOUS LA FORME <em>ax² + bx + c = 0</em></h3>

            <div id="operationAndSolution">
                <div id="left">
                    <p>EQUATION</p>
                    <p id="instruction">Veuillez remplacer <em>a, b</em> et <em>c</em>  par leurs valeurs respectives !</p>
                    <form action="index.php" method="POST">
                        <div id="equation">
                            <div id="mainEquation">
                                <input autocomplete="off" type="text" placeholder="a" name="a" id="a"><em>x² +</em> <input autocomplete="off" type="text" placeholder="b" name="b" id="b"><em>x +</em><input autocomplete="off" type="text" placeholder="c" name="c" id="c"><em>= 0</em>

                            </div>

                        </div>
                        
                            <input type="submit" value="Resoudre" name="resoudre" >
                        
                    </form>

                </div>

                <div id="barre">

                </div>

                <div id="right">
                    <p>SOLUTION</p>
                    <p id="solutionEquation"> <?php echo($a); ?> <em>x² <span id="signeB">+ </span></em> <?php echo($b); ?> <em>x <span id="signeC">+ </span> </em> <?php echo($c); ?> = 0 </p>
                    <p id="info"></p>
                    <div id="result">
                        <div id="delta">
                            <p><em>∆</em> = <?php echo(number_format($delta, 1)); ?></p> 
                        </div>

                        <div id="x0">
                            <p><em>x0</em> = <?php echo(number_format($x0,1)); ?></p>
                        </div>
                        <div id="x1">
                            <p><em>x1</em> = <?php echo(number_format($x1,1)); ?></p>

                        </div>

                        <div id="x2">
                            <p><em>x2</em> = <?php echo(number_format($x2,1)); ?></p>


                        </div>

                    </div>

                </div>

            </div>


        </div>
    </div>


    <script type="text/javascript" >
        let right = document.getElementById("right");
        let barre = document.getElementById("barre");

        let valeur0 = document.getElementById("x0");
        let valeur1 = document.getElementById("x1");
        let valeur2 = document.getElementById("x2");
        let info = document.getElementById("info");
        let solutionEquation = document.getElementById("solutionEquation");

    </script>

    <script>
        // Gestion de la date
        let d = new Date();
        document.getElementById("mainDate").innerHTML= d;
        document.getElementById("mainDate").style.fontSize = "small";

    </script>
</body>
</html>



<?php 

        if($delta == 0){
           ?>

                <script>
                    solutionEquation.style.display = "block";
                    barre.style.display = "block";
                    right.style.display = "flex";
                    valeur1.style.display = "none";
                    valeur2.style.display = "none";
                    valeur0.style.color = "yellow";

                </script>
        <?php 
        }
    
    ?>

    <!-- -->


<?php 

    if($delta > 0){
        ?>

            <script>
                solutionEquation.style.display = "block";
                barre.style.display = "block";
                right.style.display = "flex";
                valeur0.style.display = "none";
                valeur1.style.display = "flex";
                valeur1.style.color = "blue";
                valeur2.style.display = "flex";
                valeur2.style.color = "yellow";


            </script>
    <?php 
    }

?>


<?php 

    if($delta < 0){
        ?>

            <script>
                solutionEquation.style.display = "block";
                barre.style.display = "block";
                right.style.display = "flex";
                info.innerHTML = "<?php echo($noSolution); ?>"
                info.style.color = "red";
                info.style.fontWeight = "bold";
                valeur0.style.display = "none";
                valeur1.style.display = "none";
                valeur2.style.display = "none";

            </script>
    <?php 
    }
    
?>


<?php 
    if($b < 0){
        ?>
        <script>
            document.getElementById("signeB").style.display = "none"; // Si le signe de "b" est négatif, on supprime le signe plus (+) pour laisser apparaitre le signe moins (-)
        </script>
   <?php 
   }
?>

<?php 
    if($c < 0){
        ?>
        <script>
            document.getElementById("signeC").style.display = "none"; // Si le signe de "c" est négatif, on supprime le signe plus (+) pour laisser apparaitre le signe moins (-)
        </script>
   <?php 
   }
?>






