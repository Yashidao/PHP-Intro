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
        <p>Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"</p>
        <?php
        $text_cap = "smile";
        echo ucfirst($text_cap);
        ?>
    </section>
    <section>
        <p>Use the native function allowing you to display the current year.</p>
        <?php
        echo date('Y');
        ?>
    </section>
    <section>
        <p>Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.</p>
        <?php
        echo date('l jS \of F Y h:i:s A');
        ?>
    </section>
    <section>
        <p>Crée a "Sum" function that takes 2 numbers and returns their sum.</p>
        <?php
        function sum($a, $b)
        {
            return $a + $b;
        }
        echo sum(1, 4);
        ?>
    </section>
    <section>
        <p>Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."</p>
        <?php
        function add($c, $d)
        {
            if (is_numeric($c) and is_numeric($d)) {
                return $c + $d;
            } else {
                echo "Error: argument is the not a number.";
            }
        }
        echo add(9, 4);
        echo "<br>";
        echo add(9, "k");
        ?>
    </section>
    <section>
        <p>Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.</p>
        <?php
        $acronym = "In code we trust";
        function acro($text){
            $split = explode(" ", $text);
            echo var_dump($split);
            $text = "";
            for($i=0;$i<count($split);$i++){
                ucfirst($split[$i]); // Je capte pas pq?
                $text[$i] = $split[$i][0];
            }
            echo $text;
        }
        acro($acronym);
        ?>
    </section>
    <section>
        <p></p>
        <?php

        ?>
    </section>
    <section>
        <p></p>
        <?php

        ?>
    </section>
</body>

</html>