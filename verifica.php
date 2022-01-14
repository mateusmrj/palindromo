<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<div class="container my-md-5 bd-layout">
<a href=".">Testar outro</a>
<hr>
    <h4>Resultado:</h4>
    <?php

        require_once("class/Palindromo.php");

        if (isset($_POST['string'])) {
            $string = $_POST['string'];
            $polindromo = new Palindromo($string);
    //var_dump($testa);
            $returnVerificacao = $polindromo->verificarPalindromo();
            //var_dump($returnVerificacao);
            /*if ($returnVerificacao) {
                echo "<h5> true </h5>";
            } else {
                echo "<h5> false </h5>";
            }*/
    //echo $teste;
            echo "<h5>";
            var_dump($returnVerificacao);
            echo "</h5>";
        }
    ?>
    </div>
</body>
</html>