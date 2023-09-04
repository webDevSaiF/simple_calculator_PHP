<?php 
$sum = null;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberOne = $_POST['numberOne'];
    $numberTwo = $_POST['numberTwo'];
    $operator = $_POST['operator'];

    if($operator == 'plus') $sum = $numberOne + $numberTwo;
    elseif($operator == 'minus') $sum = $numberOne - $numberTwo;
    elseif($operator == 'multiply') $sum = $numberOne * $numberTwo;
    elseif($operator == 'divide') $sum = $numberOne / $numberTwo;
    else $sum = 0;   
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Calculator By PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="" method="POST" class="card mt-5 shadow" autocomplete="off">
            <div class="card-header">PHP Calculator</div>
            <div class="card-body p-4">
                <label for="numberOne" class="form-label">Number One</label>
                <input type="number" name="numberOne" id="numberOne" class="form-control" required>

                <label for="numberTwo" class="form-label mt-2">Number Two</label>
                <input type="number" name="numberTwo" id="numberTwo" class="form-control" required>

                <label for="operator" class="form-label mt-2">Select Operator</label>
                <select name="operator" id="operator" class="form-select" required>
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
                <button type="submit" class="btn btn-success w-100 mt-4">Calculate</button>
            </div>
            <div class="card-footer">
              <?php 
              if(isset($sum)){
                ?>
                 Result: <?php echo $sum?>
                <?php
              }else{
                ?>
                Result will appear here! 
               <?php
              }
              ?>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>