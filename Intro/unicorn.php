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
        <p>11. 2: Ternary exercices</p>
        <p>Are you a human, a cat or a unicorn ?</p>
        <form action="" method="get">
            <input type="radio" name="gender" value="H">Human
            <input type="radio" name="gender" value="C">Cat
            <input type="radio" name="gender" value="U">Unicorn
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
        $gender = $_GET['gender'];
        $human = "src='https://giphy.com/embed/495ybhbz2CxWJoenNM'";
        $cat = 'src="https://giphy.com/embed/VbnUQpnihPSIgIXuZv"';
        $unicorn = 'src="https://giphy.com/embed/QfHxsplYCvmwqh0vo0"';

        // $gender_choice = ($gender == "H") ? $human: ($gender == "C") ? $cat: ($gender == "U") ? $unicorn : echo "make a choice";

        $gender_choice = ($gender == "H" ? $human : ($gender == "C" ? $cat : $unicorn));



        // $is_male = ($gender == "M") ? $hello . $M : $hello . $F;
        ?>
        <div id="widgetIframe">
            <iframe <?php echo $gender_choice; ?> width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
        </div>
    </section>
</body>
<!-- 'src="https://giphy.com/embed/eK1ielUyXv0OVYiZNo"' -->
</html>