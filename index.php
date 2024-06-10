<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <h1>Dice roller</h1>
        </div>
        <form class="row align-items-end" action="index.php" method="post">
            <div class="col-auto">
                <label class="form-label" for="numberDice">Number of dice to roll:</label>
                <input class="form-control name=" numberDice" id="numberDice" type="number" value="1">
            </div>
            <div class="col-auto">
                <label class="form-label" for="diceType">Choose your dice:</label>
                <select class="form-control" name="diceType" id="diceType">
                    <option value="4">d4</option>
                    <option value="6">d6</option>
                    <option value="10">d10</option>
                    <option value="12">d12</option>
                    <option value="20">d20</option>
                </select>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Roll</button>
            </div>
        </form>
        <?php
            $numberDice = isset($_POST['numberDice']) ? $_POST['numberDice'] : 1;
            $diceType =  isset($_POST['diceType']) ? $_POST['diceType'] : 4;
            $throws = [];
            $sum = 0;

            print($numberDice . "\n");
            print($diceType . "\n");
            print(isset($_POST['numberDice']) . "\n");

            for ($i = 0; $i < $numberDice; $i++) {
                array_push($throws, rand(1, $diceType));
            }
        ?>
        <div class="row results mt-3">
            <h5>Results</h5>
            <ul class="list-group">
                <?php foreach ($throws as $throw) {
                    echo '<li class="list-group-item">' . $throw . '</li>';
                    $sum += $throw;
                } ?>
            </ul>
            <h6 class="mt-2">Sum: <?php echo $sum  ?></h6>
        </div>
    </div>
</body>

</html>