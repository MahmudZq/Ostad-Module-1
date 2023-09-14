<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        * {
            font-size: 1.0em;
        }

        h2.Comparison-top {
            width: 400px;
            text-align: center;
            border: 0.2em;
            border-color: grey;
            border-radius: 0%;
            background-color: black;
            color: white;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 900;
            font-size: xx-large;
        }


        p.Comparison-error {
            background-color: yellow;
            color: red;
        }

        p.Comparison-Result {
            width: 40%;
            text-align: center;
            border: 0.2em;
            border-color: bisque;
            border-radius: 0%;
            background-color: rgb(232, 232, 199);
            color: rgb(0, 0, 0);
            font-family: 'Courier New', Courier, monospace;
            font-weight: 700;
            position: relative;
            left: 30%;
        }

        h2.Comparison-bottom {
            width: 50%;
            text-align: center;
            border: 0.2em;
            border-color: balck;
            border-radius: 0%;
            background-color: #222222;
            color: lightgreen;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <center>
        <h2 class="Comparison-top">Comparison Tool</h2><br>
    </center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table border="0" align="center">
            <tr>
                <td>Insert First Number</td>
                <td> <input type="number" name="num01" placeholder="only numeric value" label="Input box for First Number" required></td>
            </tr>


            <tr>
                <td>Insert Second Number</td>
                <td><input type="number" name="num02" placeholder="only numeric value" label="Input box for Second Number" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"> <button style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; " title="Click to Compare Numbers">Comparison Result</button></th>
            </tr>
        </table>



    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $num01 = filter_input(
            INPUT_POST,
            "num01",
            FILTER_SANITIZE_NUMBER_FLOAT
        );
        $num02 = filter_input(
            INPUT_POST,
            "num02",
            FILTER_SANITIZE_NUMBER_FLOAT
        );


        //Error handler
        $errors = false;


        // Checking if the input value data type is number
        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'>Only insert numbers!</p>";
            $errors = true;
        }

        // Checking if the input is not left empty
        if (
            empty($num01) || empty($num02)
        ) {
            echo "<p class='calc-error'>Fill in all the fields!</p>";
            $errors = true;
        }


        // Comparison the provided data if there is no errors

        if (!$errors) {
        }
        $result = ($num01 > $num02) ? "<p class='Comparison-Result'>{$num01} is greater than {$num02}.</p>" : "<p class='Comparison-Result'>{$num02} is greater than {$num01}.</p>";
        echo $result;
    }
    ?>
    <center>
        <br>
        <h2 class="Comparison-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 6}</h2><br>
    </center>
</body>

</html>