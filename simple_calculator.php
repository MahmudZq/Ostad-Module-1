<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        * {
            font-size: 1.0em;
        }

        h2.calc-top {
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

        h2.calc-bottom {
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

        p.calc-error {
            background-color: yellow;
            color: red;
        }

        p.calc-result {
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
    </style>
</head>

<body>
    <center>
        <h2 class="calc-top">Simple Calculator</h2><br>
    </center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <!-- Calculator Input Table -->
        <table border="0" align="center">
            <tr>
                <td>First Value</td>
                <td><input type="number" name="num01" placeholder="Insert First Number" label="Input box for First value" required></td>
            </tr>
            <tr>
                <td>Arithematical Operation</td>
                <td><select name="operator">
                        <option value="add">+</option>
                        <option value="substract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select></td>
            </tr>
            <tr>
                <td>Second Value</td>
                <td><input type="number" name="num02" placeholder="Insert Second Number" label="Input box for Second value" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"><button style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; " title="Click to Calculate">Calculate</button></td>
            </tr>
        </table>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        //Error handler
        $errors = false;


        // Checking if the input value data type is number
        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'>Only insert numbers!</p>";
            $errors = true;
        }

        // Checking if the input is not left empty
        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p class='calc-error'>Fill in all the fields!</p>";
            $errors = true;
        }



        // Calculate the provided data if there is no errors

        if (!$errors) {
            $value = 0;

            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "substract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'>Something went wrong!</p>";
            }

            // Show the calculated result as output

            switch ($operator) {
                case "add":
                    echo "<p class='calc-result'>Result<br><br> {$num01} + {$num02} = {$value}</p>";
                    break;
                case "substract":
                    echo "<p class='calc-result'>Result<br><br> {$num01} + {$num02} = {$value}</p>";
                    break;
                case "multiply":
                    echo "<p class='calc-result'>Result<br><br> {$num01} X {$num02} = {$value}</p>";
                    break;
                case "divide":
                    echo "<p class='calc-result'>Result<br><br> {$num01} / {$num02} = {$value}</p>";
                    break;
                default:
                    echo "<p class='calc-result'>Something went Wrong!</p>";
            }
        }
    }
    ?>
    <center>
        <br>
        <h2 class="calc-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 7}</h2><br>
    </center>

</body>

</html>