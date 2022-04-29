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
        <?php
        $family = ["papa", "maman", "frère", "soeur"];
        $recipice = ["riz", "eggs"];
        $movie = ["Man of steel", "Hary Potter", "Justice League"];
        print_r($family);
        echo "<br>";
        print_r($recipice);
        echo "<br>";
        print_r($movie[2]);
        echo "<br>";
        $family[] = 'Poland';
        echo "<br>";
        array_push($family, 'England');
        echo "<br>";
        echo '<pre>';
        print_r($family);
        echo '</pre>';
        echo "<br>";
        var_dump($family);
        ?>
    </section>
    <section>
        <?php
        $me = array(
            'firstname' => 'Kevin',
            'lastname' => 'Tran',
            'age' => '30',
            'season' => 'fall',
            'soccer' => false,
            'favorite_movies' => array("Man of steel", "Hary Potter", "Justice League"),
            'hobbies' => array("gaming", "reading")
        );
        // sdfgh
        $brother = array(
            'firstname' => 'Michael',
            'lastname' => 'Tran',
            'age' => '16',
            'season' => 'summer',
            'soccer' => true,
            'favorite_movies' => array("KungFu Panda", "Hary Potter", "Batman"),
            'hobbies' => array("gaming", "see a friend")
        );
        $me['brother'] = $brother;
        echo "<br>";
        echo '<pre>';
        print_r($me);
        echo '</pre>';
        echo "<br>";
        echo "<br>";
        var_dump($me);
        ?>
    </section>
</body>

</html>