<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        * {
            font-size: 1.0em;
        }

        h2.converter-top {
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


        p.input-error {
            background-color: yellow;
            color: red;
        }

        p.converter-result {
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

        h2.converter-bottom {
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
        <h2 class="converter-top">Temperature Converter</h2><br>
    </center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table border="0" align="center" cellspacing="5">
            <tr>
                <td>Insert Temperaure:</td>
                <td> <input type="number" name="intemp" placeholder="Insert the value" label="Input box for Math score" required></td>
            </tr>


            <tr>
                <td rowspan="2">Conversion Direction</td>
                <td rowspan="2">
                    Celsius to Fahrenheit<input type="radio" name="direction" value="C" label="Celsius to Fahrenheit"><br>
                    Fahrenheit to Celsius<input type="radio" name="direction" value="F" label="Fahrenheit to Celsius">
                </td>

            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"> <button style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; " title="Click to Calculate Temperature">Calculate Temperature</button></th>
            </tr>
        </table>



    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $intemp = filter_input(INPUT_POST, "intemp", FILTER_SANITIZE_NUMBER_FLOAT);
        $direction = htmlspecialchars($_POST["direction"]);


        //Error handler
        $errors = false;


        // Checking if the input value data type is number
        if (!is_numeric($intemp)) {
            echo "<p class='input-error'>Only insert numbers!</p>";
            $errors = true;
        }

        // Checking if the input is not left empty
        if (empty($direction)) {
            echo "<p class='input-error'>Select the conversion direction!</p>";
            $errors = true;
        }



        // Calculate the provided data if there is no errors

        if (!$errors) {
            $outtemp = 0;
            switch ($direction) {
                case "C":
                    $outtemp = ((9.0 * $intemp) / 5.0) + 32;
                    echo "<p class='converter-result'>{$intemp} degree Celsius in Fahrenheit is {$outtemp} degree</p>";
                    break;
                case "F":
                    $outtemp = (5.0 / 9.0) * ($intemp - 32);
                    echo "<p class='converter-result'>{$intemp} degree Fahrenheit in Celsius is {$outtemp} degree</p>";
                    break;
                default:
                    echo "<p class='converter-result'>Something Went Wrong!</p>";
            }
        }
    }

    ?>
    <center>
        <br>
        <h2 class="converter-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 2}</h2><br>
    </center>
</body>

</html>