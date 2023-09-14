<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        * {
            font-size: 1.0em;
        }

        h2.EOC-top {
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

        p.EOC-result {
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

        h2.EOC-bottom {
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
        <h2 class="EOC-top">Even or Odd Checker</h2><br>
    </center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table border="0" align="center" cellspacing="5">
            <tr>
                <td>Insert a number:</td>
                <td> <input type="number" name="num" placeholder="only numeric value" label="Input box for Math score" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2"> <button style="  background-color: burlywood;border-color:burlywood; border-radius:5%;box-shadow: 0 2px 4px darkslategray;cursor: pointer; " title="Click to Check Even or Odd">Check Even or Odd</button></th>
            </tr>
        </table>



    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Grab data from inputs
        $num = filter_input(INPUT_POST, "num", FILTER_SANITIZE_NUMBER_FLOAT);


        //Error handler
        $errors = false;


        // Checking if the input value data type is number
        if (!is_numeric($num)) {
            echo "<p class='input-error'>Only insert numbers!</p>";
            $errors = true;
        }


        // Calculate the provided data if there is no errors

        if (!$errors) {
            $result = 0;
            $result = $num % 2;
            switch ($result) {
                case "0":
                    echo "<p class='EOC-result'>{$num} is an EVEN number</p>";
                    break;
                case "1":
                    echo "<p class='EOC-result'>{$num} is an ODD number</p>";
                    break;
                default:
                    echo "<p class='EOC-result'>Something Went Wrong!</p>";
            }
        }
    }

    ?>
    <center>
        <br>
        <h2 class="EOC-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 4}</h2><br>
    </center>
</body>

</html>