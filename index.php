<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="numberDice">Number of dice to roll:</label>
        <input name="numberDice" id="numberDice" type="number">

        <label for="diceType">Your age:</label>
        <select name="diceType" id="diceType">
            <option value="4">d4</option>
            <option value="6">d6</option>
            <option value="10">d10</option>
            <option value="12">d12</option>
            <option value="20">d20</option>
        </select>

        <button type="submit">Roll</button>
    </form>
    <?php






        if (isset($_POST['numberDice']) && isset($_POST['diceType'])) {
            echo $_POST['numberDice'] . '<br>';
            echo $_POST['diceType'];
        }
    ?>
</body>

</html>