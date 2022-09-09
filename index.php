<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Survey Says</title>
<style>
    body {
        background-color: #333;
        color: white;
      text-shadow: 2px 2px black;
      text-align: center;
      font-size: 3rem;
    }

    input {
        height: 50px;
        font-size: 2rem;
    }

    button {
        height: 50px;
        width: 100px;
        background-color: orange;
        font-size: 1.5rem;
    }
</style>

</head>
<body>
<h1>Survey Says Scores</h1>
    <div id="container">
        <form action="./scores.php" method='POST'>
            <label for="team1">Team 1:</label>
                <input type="text" name='team1'><br>
            
                <label for="team2">Team 2:</label>
                <input type="text" name='team2'><br>

                <label for="team3">Team 3:</label>
                <input type="text" name='team3'><br>

                <label for="team4">Team 4:</label>
                <input type="text" name='team4'><br>

                <label for="team5">Team 5:</label>
                <input type="text" name='team5'><br>

                <label for="team6">Team 6:</label>
                <input type="text" name='team6'><br>

                <label for="team7">Team 7:</label>
                <input type="text" name='team7'><br>

                <label for="team8">Team 8:</label>
                <input type="text" name='team8'><br>

                <label for="team9">Team 9:</label>
                <input type="text" name='team9'><br>

                <label for="team10">Team 10:</label>
                <input type="text" name='team10'><br>

                <label for="team11">Team 11:</label>
                <input type="text" name='team11'><br>

                <label for="team12">Team 12:</label>
                <input type="text" name='team12'><br>

                <label for="team13">Team 13:</label>
                <input type="text" name='team13'><br>

                <label for="team14">Team 14:</label>
                <input type="text" name='team14'><br>

                <label for="team15">Team 15:</label>
                <input type="text" name='team15'><br>

                <label for="team16">Team 16:</label>
                <input type="text" name='team16'><br>

                <label for="team17">Team 17:</label>
                <input type="text" name='team17'><br>

                <label for="team18">Team 18:</label>
                <input type="text" name='team18'><br>

                <label for="team19">Team 19:</label>
                <input type="text" name='team19'><br>

                <label for="team20">Team 20:</label>
                <input type="text" name='team20'><br>
            <button name='submit'>Submit</button>
        </form>
    </div>
    
</body>
</html>