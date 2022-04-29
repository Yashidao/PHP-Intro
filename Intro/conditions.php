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
        <p>Non fonctionnel</p>
        <?php
        // $possible_states = array(
        //     0 => "health hazard",
        //     1 =>  "filthy",
        //     2 => "dirty",
        //     3 =>  "clean",
        //     4 =>  "immaculate"
        // );
        // // When testing, change the index value to navigate to the possible array values
        // $room_filthiness = $possible_states[0];

        // if () {
        //     echo "Yuk, Room is Disgusting! Let's clean it up !";
        // } else if () {
        //     echo "Yuk, Room is dirty : let's clean it up !";
        //     // ...
        // } else {
        //     echo "<br>Nothing to do, room is neat.";
        // }
        ?>
    </section>
    <section>
        <p>Phrase en fonction de l'heure actuelle</p>
        <?php
        date_default_timezone_set("Europe/Brussels");
        $hour = date("H");
        $minutes = date("i");
        $count = 60 * $hour + $minutes;
        // 1440min pour 24h
        if ($count > 5 * 60 and $count <= 9 * 60) {
            echo "Good Morning!";
        } else if ($count >= 9 * 60 + 1 and $count <= 12 * 60) {
            echo "Good day!";
        } else if ($count >= 12 * 60 + 1 and $count <= 16 * 60) {
            echo "Good afthernoon!";
        } else if ($count >= 16 * 60 + 1 and $count <= 21 * 60) {
            echo "Good evening!";
        } else {
            echo "Good nigth!";
        }
        ?>
        <p>Il est: <?php echo $hour; ?>h: <?php echo $minutes; ?>min.</p>
    </section>
    <section>
        <p>Afficher différente phases par rapport à un age donner</p>

        <form method="get" action="">
            <label for="age">Your Age =></label>
            <input type="" name="age">
            <input type="submit" name="submit" value="Greet me now">
        </form>
        <?php
        if (isset($_GET['age'])) {
            if ($_GET['age'] < 12) {
                echo "Hello kiddo!";
            }
            if ($_GET['age'] >= 12 and $_GET['age'] <= 18) {
                echo "Hello Teenager!";
            }
            if ($_GET['age'] > 18 and $_GET['age'] <= 115) {
                echo "Hello Adult!";
            }
            if ($_GET['age'] > 115) {
                echo "Wow! Still alive? Are you a robot, like me ? Can I hug you ?";
            }
        }
        ?>
    </section>

    <section>
        <p>4. Display a different greeting according to the user's age and gender.</p>

        <form methode="get" action="">
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <br>
            <label for="Age">Your Age =></label>
            <input type="" name="Age">
            <input type="submit" value="Submit">
        </form>
        <?php
        $male = "mister";
        $female = "miss";
        $gender_choice = $_GET['gender'];

        if ($gender_choice == 'male') {
            if (isset($_GET['Age'])) {
                if ($_GET['Age'] < 12) {
                    echo "Hello $male kiddo!";
                }
                if ($_GET['Age'] >= 12 and $_GET['Age'] <= 18) {
                    echo "Hello $male Teenager!";
                }
                if ($_GET['Age'] > 18 and $_GET['Age'] <= 115) {
                    echo "Hello $male Adult!";
                }
                if ($_GET['Age'] > 115) {
                    echo "Wow $male! Still alive? Are you a robot, like me ? Can I hug you ?";
                }
            }
        } else if ($gender_choice == 'female') {
            if (isset($_GET['Age'])) {
                if ($_GET['Age'] < 12) {
                    echo "Hello $female kiddo!";
                }
                if ($_GET['Age'] >= 12 and $_GET['Age'] <= 18) {
                    echo "Hello $female Teenager!";
                }
                if ($_GET['Age'] > 18 and $_GET['Age'] <= 115) {
                    echo "Hello $female Adult!";
                }
                if ($_GET['Age'] > 115) {
                    echo "Wow $female! Still alive? Are you a robot, like me ? Can I hug you ?";
                }
            }
        }
        ?>
        <!-- <p>Ton choix: <?php echo  $gender_choice ?></p> -->
        <!-- 

    -->
    </section>
    <section>
        <p>5. Display a different greeting according to the user's age, gender and mothertongue.</p>
        <p>C'est la même chose que le 4 en plus long</p>
        <!-- <form methode="get" action="">
            <input type="radio" name="english" value="yes">Yes
            <input type="radio" name="english" value="no">No
        </form> -->
    </section>
    <section>
        <p>6. The Girl Soccer team</p>

        <form methode="get" action="">
            <input type="radio" name="Gender" value="Male">Male
            <input type="radio" name="Gender" value="Female">Female
            <br>
            <label for="AGE"> We need your age:</label>
            <br>
            <input type="" name="AGE">
            <br>
            <label for="Name">We need your name:</label>
            <br>
            <input type="" name="Name">
            <br>
        </form>
        <input type="submit" value="try it">
        <?php
        $gender = $_GET['Gender'];
        $AGE = $_GET['AGE'];
        if ($gender == "Female") {
            echo "female";
            // if ($_AGE >= 21 and $_AGE <= 40) {
            //     echo "Welcome to the team!";
            // } else {
            //     echo "Sorry you don't fit the criteria :/";
            // }
        }
        if ($gender == "Male") {
            echo "Male";
            echo "Sorry you don't fit the criteria";
        }
        ?>
        <p>Le bouton ne fonctionne pas, je sais pas pourquoi</p>
    </section>
</body>

</html>