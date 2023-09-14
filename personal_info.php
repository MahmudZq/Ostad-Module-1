<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Page</title>
    <style>
        * {
            font-size: 1.0em;
        }

        h2.PIP-top {
            width: 400px;
            text-align: center;
            border: 0.2em;
            border-color: grey;
            border-radius: 0%;
            background-color: black;
            color: white;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 900;
            font-size: 2.5em;
        }

        div.PIP-body {
            width: 70%;
            text-align: left;
            border: 0.2em;
            border-color: bisque;
            border-radius: 0%;
            background-color: rgb(232, 232, 199);
            color: rgb(0, 0, 0);
            font-family: 'Courier New', Courier, monospace;
            font-weight: 700;
            position: relative;
            left: 15%;
            font-size: 2.0em;
        }

        h2.PIP-bottom {
            width: 50%;
            text-align: center;
            border: 0.2em;
            border-color: balck;
            border-radius: 0%;
            background-color: #222222;
            color: lightgreen;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;
            font-size: 1.75em;
        }
    </style>
</head>

<body>
    <center>
        <h2 class="PIP-top"><?php echo "My Personal Info" ?></h2><br>
    </center>
    <div class="PIP-body">
        <?php
        $name = "Mahmud Rayhan";
        $age = 23;
        $country = 'Bangladesh';
        $city = 'Dhaka';
        $school = 'Academia';
        $AcademicProgram = 'GCE A Level';
        $Curriculam = 'Cambridge';
        $hobby = 'Chess, Coding and Stock Market Analysis';
        $chessOpenning = 'Flick-Knife Attack';
        $favAnimal = 'Sheep';
        $color = "Can't specify just one. It's Blue, White, Parakeet green and so many.";

        ?>
        <center>
            <table border="0">
                <tr>
                    <td>Name:</td>
                    <td><?php echo "{$name}"; ?> </td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><?php echo "{$age}"; ?> </td>
                </tr>

                <tr>
                    <td>Country:</td>
                    <td><?php echo "{$country}"; ?> </td>
                </tr>

                <tr>
                    <td>City:</td>
                    <td><?php echo "{$city}"; ?> </td>
                </tr>

                <tr>
                    <td>School</td>
                    <td><?php echo "{$school}"; ?> </td>
                </tr>

                <tr>
                    <td>Academic Program:</td>
                    <td><?php echo "{$AcademicProgram}"; ?> </td>
                </tr>

                <tr>
                    <td>Curriculum:</td>
                    <td><?php echo "{$Curriculam}"; ?> </td>
                </tr>

                <tr>
                    <td>Hobby:</td>
                    <td><?php echo "{$hobby}"; ?> </td>
                </tr>

                <tr>
                    <td>Favorite Chess Openning:</td>
                    <td><?php echo "{$chessOpenning}"; ?> </td>
                </tr>

                <tr>
                    <td>Favorite Animal:</td>
                    <td><?php echo "{$favAnimal}"; ?> </td>
                </tr>

                <tr>
                    <td>Favorite Color:</td>
                    <td><?php echo "{$color}"; ?> </td>
                </tr>
            </table>

    </div>
    <center>
        <br>
        <h2 class="PIP-bottom">Coded by <a href="https://mahmudrayhan.com" style="text-decoration:none; color:lightgreen;">Mahmud Rayhan</a> for <a href="https://ostad.app/" style="text-decoration:none; color:lightgreen;"> Ostad</a> Module-1 {Task - 1}</h2><br>
    </center>
</body>

</html>