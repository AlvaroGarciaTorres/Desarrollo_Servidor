<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css?v=<?php echo(rand()); ?>">
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
</head>

<body>
    <h1>Comprobación DNI</h1>
    <div class="get">
    <?php
        define('USERDNI',$_GET['dni']);
        $str = USERDNI;
        $length = strlen($str);
        $has_a_letter = false;
        
        for($i=0; $i<$length; $i++){
            if(!is_numeric(USERDNI[$i])){
                echo "<p>La letra de su DNI es " . USERDNI[$i] . "</p>";
                $has_a_letter = true;
            }
        }

        if(!$has_a_letter){
            echo "<p>DNI incorrecto, introduca todos los números y la letra</p>";
        }
        echo<<<END
        <form action="../index.php" method="GET" enctype="multipart/form-data">
            <input type="submit" name="save" value="Volver">
        </form>
        END;
    ?>
    </div>
</body>

</html>