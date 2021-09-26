<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="css/index.css?v=<?php echo(rand()); ?>">
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
</head>
<body>
    <h1>Máquina de hacer factoriales</h1>
<?php


    define('USERNUMBER',$_POST['user_number']);
    $str = ""; 
    $answer = 0;

    function factorial($number){
        $result = 1;
        for($i=1; $i<=$number; $i++){
            $result *= $i;
        }
        return $result;
    }

    echo "<div class='result'>";
        $str .= "\t<p>" . USERNUMBER . "! ="; 
        for($i=1; $i<=USERNUMBER; $i++){ //loop to paint the visual representation of the factorial operation
            if($i != USERNUMBER){
                $str .= " $i *";
            }else {
                echo "$str $i</p>";               
            }
        } 
        $answer = factorial(USERNUMBER); //factorial function called      
        echo "\t<p><b>Resultado = $answer</b></p>";
    echo "</div>\n";

?>
</body>
</html>