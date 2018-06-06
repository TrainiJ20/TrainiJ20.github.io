<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
        <title>GTN - Proof</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <br><br>
        <div class="container">
            <h1>Proof of this Algorithm</h1>
            <h2>Test Cases</h2>
            <h3>Max attempt evaluation</h3>
            <table>
                <tr>
                    <th>guess_range</th>
                    <th>max_attempts</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>70</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>153</td>
                    <td>8</td>
                </tr>
            </table>
            <br>
            <h3>Output with different conditions</h3>
            <table>
                <tr>
                    <th>guess</th>
                    <th>guess_range</th>
                    <th>attempts</th>
                    <th>max_attempts</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>67</td>
                    <td>254</td>
                    <td>4</td>
                    <td>8</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>550</td>
                    <td>254</td>
                    <td>5</td>
                    <td>8</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>600</td>
                    <td>254</td>
                    <td>8</td>
                    <td>8</td>
                    <td>Game over! The number is 254.</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>254</td>
                    <td>8</td>
                    <td>8</td>
                    <td>Game over! The number is 254.</td>
                </tr>
                <tr>
                    <td>539</td>
                    <td>254</td>
                    <td>6</td>
                    <td>8</td>
                    <td>Correct! You made 6 guesses.</td>
                </tr>
                <tr>
                    <td>539</td>
                    <td>254</td>
                    <td>2</td>
                    <td>8</td>
                    <td>Correct! You made 2 guesses.</td>
                </tr>
                </table>
            <br><br>
            <h2>Algorithm Desk Check</h2>
            <h3>Win</h3>
            <p>Input: guess_range = 99</p>
            <table>
                <tr>
                    <th>target</th>
                    <th>guess</th>
                    <th>max_attempts</th>
                    <th>attempts</th>
                    <th>Display</th>
                </tr>
                <tr>
                    <td>19</td>
                    <td>49</td>
                    <td>7</td>
                    <td>1</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>24</td>
                    <td>7</td>
                    <td>2</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>12</td>
                    <td>7</td>
                    <td>3</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>18</td>
                    <td>7</td>
                    <td>4</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>21</td>
                    <td>7</td>
                    <td>5</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>19</td>
                    <td>7</td>
                    <td>6</td>
                    <td>Correct! You made 6 guesses.</td>
                </tr>
            </table>
            <br>

            <h3>Loss</h3>
            <p>Input: guess_range = 500</p>
            <table>
                <tr>
                    <th>target</th>
                    <th>guess</th>
                    <th>max_attempts</th>
                    <th>attempts</th>
                    <th>Display</th>
                </tr>
                <tr>
                    <td>134</td>
                    <td>150</td>
                    <td>9</td>
                    <td>1</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>15</td>
                    <td>9</td>
                    <td>2</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>300</td>
                    <td>9</td>
                    <td>3</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>299</td>
                    <td>9</td>
                    <td>4</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>138</td>
                    <td>9</td>
                    <td>5</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>115</td>
                    <td>9</td>
                    <td>6</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>135</td>
                    <td>9</td>
                    <td>7</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>120</td>
                    <td>9</td>
                    <td>8</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>133</td>
                    <td>9</td>
                    <td>9</td>
                    <td>Game over! The number is 134.</td>
                </tr>
            </table>
            <br><br>
            <p>The testing and production of this algorithm and website is evidence of my skills</p><br>
            <a href="skills.php" class="large button">Find out how!</a>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
