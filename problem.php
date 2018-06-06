<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
        <title>GTN - Problem</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <br><br>
        <div class="container">
            <h1>The Problem</h1>
            <h2>Statement</h2>
            <p>Guess the number is an interesting application of the <a href="https://en.wikipedia.org/wiki/Binary_search_algorithm">binary search algorithm</a>.</p>
            <p>Write an algorithm that randomly generates a number and allows a user to guess for a number of times (lives); each time the guess is wrong, message the user to go higher or lower...assuming there are lives left. If the user runs out of lives, message the user that it is 'game over' and display the number as well.</p>
            <p>Determine the number of lives based on the efficient use of the binary search algorithm which essentially means how many bits are required to represent the random number in binary, e.g. 25 requires 5 bits so user can have 5 guess, 99 requires 7 bits so user can have 7 guesses, etc. This <a href="https://www.youtube.com/watch?v=thrx3SBEpL8&feature=youtu.be&t=3m12s">Computerphile</a> video has a neat take on this.</p>
            <p>Messages to the user include:</p>
            <ul>
                <li>Higher</li>
                <li>Lower</li>
                <li>Correct! You made n guesses.</li>
                <li>Game over! The number is x.</li>
            </ul>
            <h2>Input/Output</h2>
            <table>
                <tr>
                    <th>Input</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>Guess range</td>
                    <td>Random target number</td>
                </tr>
                <tr>
                    <td>Guesses</td>
                    <td>Lives</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Higher/Lower</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Win/Loss</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Attempts</td>
                </tr>
            </table>
            <br><br>
            <p>This algorithm employs sophisticated methods to efficiently solve this problem</p><br>
            <a href="algorithm.php" class="large button">The Solution</a>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
