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
        <p>Exercice 9</p>
        <form action="" method="get">
            <input type="text" name="note" placeholder="point de l'interro">
            <br>
            <input type="submit" value="Submit"></input>
        </form>
        <?php
        $note = $_GET['note'];
        switch ($note) {
            case "1":
                echo "This work is really bad. What a dumb kid! ";
                break;
            case "2":
                echo "This work is really bad. What a dumb kid! ";
                
                break;
            case "3":
                echo "This work is really bad. What a dumb kid! ";
                
                break;
            case "4":
                echo "This work is really bad. What a dumb kid! ";
                
                break;
            case "5":
                echo "This is not sufficient. More studying is required.";
                break;
            case "6":
                echo "This is not sufficient. More studying is required.";
                break;
            case "7":
                echo "This is not sufficient. More studying is required.";
                break;
            case "8":
                echo "This is not sufficient. More studying is required.";
                break;
            case "9":
                echo "This is not sufficient. More studying is required.";
                break;
            case "10":
                echo "barely enough!";
                break;
            case "11":
                echo "Not bad!";
                break;
            case "12":
                echo "Not bad!";
                break;
            case "13":
                echo "Not bad!";
                break;
            case "14":
                echo "Not bad!";
                break;
            case "15":
                echo "Bravo, bravissimo!";
                break;
            case "16":
                echo "Bravo, bravissimo!";
                break;
            case "17":
                echo "Bravo, bravissimo!";
                break;
            case "18":
                echo "Bravo, bravissimo!";
                break;
            case "19":
                echo "Too good to be true : confront the cheater!";
                break;
            case "20":
                echo "Too good to be true : confront the cheater!";
                break;
            default:
                echo "There're a error somewhere!";
        }
        ?>
    </section>
</body>

</html>