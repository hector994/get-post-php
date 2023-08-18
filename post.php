<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Ingresa un valor:</label>
        <input type="text" name="post" id="">
        Masculino
             <input type="checkbox" value="Masculino" name="genero[]" id="">
        Femenino
            <input type="checkbox" value="Masculino" name="genero[]" id="">
        <button type="submit">Enviar</button>

        <?php
        $array=[1,2,3,4,5];
        foreach ($array as $val) {
            echo $val.'<input type="checkbox" value="'.$val.'" name="genero[]" id="">';
        }
        ?>

    </form>
</body>
</html>