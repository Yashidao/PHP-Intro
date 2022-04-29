<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <p>11. 1: Ternary exercices</p>
        <form action="" method="get">
            <input type="radio" name="gender" value="M">M
            <input type="radio" name="gender" value="F">F
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php 
        $hello = "Salutation cher ";
        $M = "codeur!";
        $F = "codeuse!";
        $gender = $_GET['gender'];
        $is_male = ($gender == "M") ? $hello . $M : $hello . $F;
        echo $is_male;
        ?>
    </section>

</body>
</html>