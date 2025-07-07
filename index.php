<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Calculator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="card w-25 mx-auto my-4">
        <div class="card-header">
            <h1 class="text-center">Calculator</h1>
        </div>
        <div class="card-body">
            <p class="fw-bold">Select Operation</p>
            <form action="" method="post">
                <div class="form-check-inline">
                    <input type="radio" name="operator" id="add" value="+" class="form-check-input">
                    <label for="add" class="form-check-label me-2">Addition</label>

                    <input type="radio" name="operator" id="subtract" value="-" class="form-check-input">
                    <label for="subtract" class="form-check-label me-2">Subtraction</label>

                    <input type="radio" name="operator" id="multiply" value="*" class="form-check-input">
                    <label for="multiply" class="form-check-label me-2">Multiplication</label>

                    <input type="radio" name="operator" id="divide" value="/" class="form-check-input">
                    <label for="divide" class="form-check-label me-2">Division</label>
                </div>
                <hr>
                <label for="first" class="form-label">First Number:</label>
                <input type="number" name="num1" id="first" class="form-control">

                <label for="second" class="form-label">Second Number:</label>
                <input type="number" name="num2" id="second" class="form-control">

                <div class="text-center mt-2">
                    <button type="submit" name="compute" class="btn btn-secondary w-50">Compute</button>
                </div>
            </form>
        </div>
    </div>

    <!-- 1st answer -->
    <?php
        include "Calculator.php";

        if (isset($_POST['compute'])){

            $calculator = new Calculator($_POST['num1'], $_POST['num2'], $_POST['operator']);
    ?>
            <div class="w-25 mx-auto border rounded p-2">
                <h2 class="text-center">Result</h2>
                <p class="text-center fw-bold fst-italic display-6">
                    <?= $calculator->getNum1() ?> <?= $calculator->getOperator() ?> <?= $calculator->getNum2() ?> = <?= $calculator->compute() ?>
                </p>
            </div>
    <?php
        }
    ?>
    

    <!-- 2nd answer -->
    <?php
        include "Calculator.php";

        if (isset($_POST['compute'])){
            // receiver
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operator'];

            // create the object                          +
            $calculator = new Calculator($num1, $num2, $operation);

            echo "<div class='w-25 mx-auto border rounded p-2'>";
            echo "<h2 class='text-center'>Result</h2>";
            echo "<p class='text-center fw-bold fst-italic display-6'>" . $calculator->getNum1() . $calculator->getOperator() . $calculator->getNum2() . " = " . $calculator->compute() ."</p>";
        }
    ?>
    

</body>
</html>