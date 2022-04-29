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
        <p>Excuses Generator</p>
        <form action="" method="get">
            <input type="text" name="child" placeholder="name of child">
            <br>
            <input type="radio" name="gender" value="girl">Girl
            <input type="radio" name="gender" value="boy">Boy
            <br>
            <input type="text" name="teacher" placeholder="name of teacher">
            <br>
            <input type="radio" name="excuse" value="sick">Sickness
            <br>
            <input type="radio" name="excuse" value="death">Death of someone
            <br>
            <input type="radio" name="excuse" value="activity">Activities
            <br>
            <input type="radio" name="excuse" value="luck">Random excuses
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php 
        $child = $_GET['child'];
        $gender = $_GET['gender'];
        $teacher = $_GET['teacher'];
        $excuse = $_GET['excuse'];
        $boy = "boy";
        $girl = "girl";
        ?>
        <p>Hi <?php echo $teacher ?>. My little <?php echo $gender . " " . $child ?> can't come to school today because of <?php echo $excuse ?></p>
    </section>
</body>
</html>