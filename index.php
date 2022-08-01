<?php 
    $delta = 0 ;
    $x0 = 0 ;
    $x1 = 0 ;
    $x2 = 0 ;
    $noSolution = "Pas de solution";
    $errorNumber = "Entrez uniquement des nombres entiers";
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if($_POST["resoudre"]){

        $delta = $b * $b - 4 * $a * $c ;

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
                <p>Vendr<strong>edi, le 29 ju</strong>illet 2022</p>
            </div>

            <h3>RESOLUTION DES EQUATIONS DU 2nd DEGRE SOUS LA FORME <em>ax² + bx + c = 0</em></h3>

            <div id="operationAndSolution">
                <div id="left">
                    <p>EQUATION</p>
                    <p id="instruction">Veuillez remplacer <em>a, b</em> et <em>c</em>  par leurs valeurs respectives !</p>
                    <form action="index.php" method="POST">
                        <div id="equation">
                            <div id="mainEquation">
                                <input type="text" placeholder="a" name="a" id="a"><em>x² +</em> <input type="text" placeholder="b" name="b" id="b"><em>x +</em><input type="text" placeholder="c" name="c" id="c"><em>= 0</em>

                            </div>

                        </div>
                        
                            <input type="submit" value="Resoudre" name="resoudre" >
                        
                    </form>

                </div>

                <div id="barre">

                </div>

                <div id="right">
                    <p>SOLUTION</p>
                    <p id="solutionEquation"> <?php echo($a); ?> <em>x² + </em> <?php echo($b); ?> <em>x + </em> <?php echo($c); ?> = 0 </p>
                    <p id="info"></p>
                    <div id="result">
                        <div id="delta">
                            <p><em>∆</em> = <?php echo($delta); ?></p>
                        </div>

                        <div id="x0">
                            <p><em>x0</em> = <?php echo($x0); ?></p>
                        </div>
                        <div id="x1">
                            <p><em>x1</em> = <?php echo($x1); ?></p>

                        </div>

                        <div id="x2">
                            <p><em>x2</em> = <?php echo($x2); ?></p>


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
                valeur2.style.display = "flex";

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
                    valeur0.style.display = "none";
                    valeur1.style.display = "none";
                    valeur2.style.display = "none";

                </script>
        <?php 
        }
    
    ?>


<?php 

        /*if(is_int($a)== 0 || is_int($b)== 0 || is_int($c)== 0){
           ?>

                <script>
                    barre.style.display = "block";
                    right.style.display = "flex";
                    info.innerHTML = "<?php echo($errorNumber); ?>"
                    valeur0.style.display = "none";
                    valeur1.style.display = "none";
                    valeur2.style.display = "none";

                </script>
        <?php 
        }*/
    
    ?>






