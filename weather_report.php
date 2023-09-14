<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        * {
            font-size: 1.0em;
        }

        h2.Weather-top {
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


        p.Weather-error {
            background-color: yellow;
            color: red;
        }

        p.Weather-Report {
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

        h2.Weather-bottom {
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

        .a {
            background-color: burlywood;
        }
    </style>
</head>

<body>
    <center>
        <h2 class="Weather-top">Weather Report</h2><br>
    </center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table border="0" align="center">
            <tr>
                <td>Insert Today's Temperature (Celcius Scale)</td>
                <td> <input type="number" name="temp" placeholder="Only Numeric Value" label="Input box for Math score" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"> <button style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; " title="Click for Weather Report">Weather Report</button></th>
            </tr>
        </table>



    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $temp = filter_input(INPUT_POST, "temp", FILTER_SANITIZE_NUMBER_FLOAT);


        //Error handler
        $errors = false;


        // Checking if the input value data type is number
        if (!is_numeric($temp)) {
            echo "<p class='Weather-error'>Only insert numbers!</p>";
            $errors = true;
        }

        // Checking if the input is not left empty
        if (empty($temp)) {
            echo "<p class='Weather-error'>Fill in all the fields!</p>";
            $errors = true;
        }



        // Weatherulate the provided data if there is no errors

        if (!$errors) {
        }
        switch ($temp) {
            case ($temp >= 20):
                echo "<p class='Weather-Report'>Report: It's Warm.</p>";
                break;
            case ($temp >= 5 && $temp < 20):
                echo "<p class='Weather-Report'>Report: It's Cool.</p>";
                break;
            case ($temp < 5):
                echo "<p class='Weather-Report'>Report: It's Freezing!</p>";
                break;
            default:
                echo "<p class='Weather-Report'>Something Went Wromg!</p>";
        }
    }
    ?>
    <center>
        <br>
        <h2 class="Weather-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 5}</h2><br>
    </center>
</body>

</html>