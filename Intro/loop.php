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
        <p>foreach verb</p>
        <?php
        $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
        foreach ($pronouns as $pronoun) {
            if ($pronoun == 'He/She') {
                echo $pronoun . " codes. <br>";
            } else {
                echo $pronoun . " code. <br>";
            }
        }
        ?>
    </section>
    <section>
        <p>Write a script that prints the numbers from 1 to 120 using 'while'</p>
        <?php
        $count = 1;
        while ($count <= 120) {
            echo $count . " - ";
            $count++;
        }
        ?>
        <p>Write a script that prints the numbers from 1 to 120 using 'for'</p>
        <?php
        for ($count = 1; $count <= 120; $count++) {
            echo $count . " - ";
        }
        ?>
        <p>Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.</p>
        <?php
        $code = array("Pierre", "Kevin", "Nicolas", "Elise", "Sarah", "Loic", "Axel");
        foreach ($code as $name) {
            echo $name . " - ";
        }
        ?>
    </section>
    <section>
        <p>Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form </p>


        <?php
        $pays = array(
            "BE" => "Belgique",
            "FR" => "France",
            "GE" => "Allemagne",
            "NL" => "Pays-Bas",
            "LX" => "Luxembourg",
            "SU" => "Suisse",
            "IT" => "Italie",
            "ES" => "Espagne",
            "PO" => "Portugal",
            "VT" => "Vietnam"
        );
        echo " 
        <form action= method=get>
            <select name= pays id= Pays>
            ";
        // for($i = 0; $i<count($pays);$i++){
        //     echo "<option value=" . $pays[$i] . ">$pays[$i]</option>";
        // }
        foreach($pays as $key => $value){
            echo "<option value=" . $pays[$key] . ">$value</option>";
        }
        echo "</select>
        </form>";
        ?>
    </section>
</body>

</html>