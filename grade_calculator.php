<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade_Calculator</title>
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
    </style>
</head>

<body>
    <center>
        <h2 class="calc-top">Grade Calculator</h2><br>
    </center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table border="0" align="center">
            <tr>
                <td>Mathematics</td>
                <td> <input type="number" name="num01" placeholder="Insert Math Score" label="Input box for Math score" required></td>
            </tr>


            <tr>
                <td>Physics</td>
                <td><input type="number" name="num02" placeholder="Insert Physics Score" label="Input box for Physics score" required></td>
            </tr>

            <tr>
                <td>Chemistry</td>
                <td><input type="number" name="num03" placeholder="Insert Physics Score" label="Input box for Chemistry score" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"> <button style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; " title="Click to Calculate GPA">Calculate GPA</button></th>
            </tr>
        </table>



    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $num03 = filter_input(INPUT_POST, "num03", FILTER_SANITIZE_NUMBER_FLOAT);


        //Error handler
        $errors = false;


        // Checking if the input value data type is number
        if (!is_numeric($num01) || !is_numeric($num02) || !is_numeric($num03)) {
            echo "<p class='calc-error'>Only insert numbers!</p>";
            $errors = true;
        }

        // Checking if the input is not left empty
        if (empty($num01) || empty($num02) || empty($num03)) {
            echo "<p class='calc-error'>Fill in all the fields!</p>";
            $errors = true;
        }



        // Calculate the provided data if there is no errors

        if (!$errors) {
            $avg = 0;
            $avg = ($num01 + $num02 + $num03) / 3;
        }
        switch ($avg) {
            case ($avg >= 80):
                echo "<p class='calc-result'>Average Score: {$avg}<br>Grade: A</p>";
                break;
            case ($avg >= 70 && $avg < 80):
                echo "<p class='calc-result'>Average Score: {$avg}<br>Grade: B</p>";
                break;
            case ($avg >= 60 && $avg < 70):
                echo "<p class='calc-result'>Average Score: {$avg}<br>Grade: C</p>";
                break;
            case ($avg >= 50 && $avg < 60):
                echo "<p class='calc-result'>Average Score: {$avg}<br>Grade: D</p>";
                break;
            default:
                echo "<p class='calc-result'>Average Score: {$avg}<br>Grade: F</p>";
        }
    }

    ?>
    <center>
        <br>
        <h2 class="calc-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 3}</h2><br>
    </center>
</body>

</html>