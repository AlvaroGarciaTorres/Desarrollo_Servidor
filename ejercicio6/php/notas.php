<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css?v=<?php echo(rand()); ?>">
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
</head>

<body>
    <h1>Comprobación de aprobado</h1>
    <div class="post">
        <?php
        define('STUDENTNAME',$_POST['student_name']);
        define('STUDENTGRADE',$_POST['student_grade']);
        echo "<br>";
        if(STUDENTGRADE == null or STUDENTGRADE < 0 or STUDENTGRADE > 10){
           echo "<p>Nota incorrecta, recuerda que no puede ser menor que cero ni mayor que diez.</p>"; 
        } else if(STUDENTNAME == null){
            echo "<p>Por favor, introduce tu nombre</p>";
        } else if(STUDENTGRADE > 5){
            echo "<p>Enhorabuena \"" . STUDENTNAME . "\", has aprobado con un " . STUDENTGRADE . "</p>";
        } else echo "<p>Lo siento \"" . STUDENTNAME . "\", has suspendido con un " . STUDENTGRADE . "</p>";
    
        echo <<<END
        <form action="../index.php" method="POST" enctype="multipart/form-data">
        <br>
             <input type="submit" name="save" value="Volver">
        </form>
        END;
        
        ?>
    </div>
</body>

</html>