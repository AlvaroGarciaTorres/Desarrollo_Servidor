<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css?v=<?php echo(rand()); ?>">
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
</head>

<body>
    <h1>Comprobación DNI</h1>
    <div class="form_div">
        <form action="php/dni.php" method="GET" enctype="multipart/form-data">
            <label for="dni">Introduce tu DNI: </label>
            <input type="text" id="dni" name="dni">
            <input type="submit" name="save">
        </form>
    </div>
</body>

</html>