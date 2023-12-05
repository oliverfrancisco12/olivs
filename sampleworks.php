<?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["clear"])) {
        $_POST['expression'] = '';
      } else if (isset($_POST["calculate"])) {
        try {
          $_POST['expression'] = eval('return ' . $_POST['expression'] . ';');
        } catch (Exception $e) {
          $_POST['expression'] = 'Error';
        }
      } else {
        $_POST['expression'] .= $_POST['button'];
      }
    }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-image: url(goj.png);
      -webkit-background-size:cover ;
    background-size: cover;
    background-position: center;
    height: 130vh;
    width: 100%;
    }

    .calculator {
      width: 300px;
      padding: 20px;
      background-image: url(expansion.jpg);
      background-position: center;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      
    }

    input {
      width: 100%;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 16px;
    }

    button {
      width: 48px;
      height: 48px;
      margin: 5px;
      font-size: 18px;
      cursor: pointer;
      border: none;
      background-color: #C41E3A;
      color: #fff;
      border-radius: 5px;
    }

    button:hover {
      background-color: black;
    }
  </style>
</head>
<body>

  <div class="calculator">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="text" name="expression" value="<?php echo isset($_POST['expression']) ? $_POST['expression'] : ''; ?>" readonly>
      <br>
      <button type="submit" name="button" value="7">7</button>
      <button type="submit" name="button" value="8">8</button>
      <button type="submit" name="button" value="9">9</button>
      <button type="submit" name="button" value="/">/</button>
      <br>
      <button type="submit" name="button" value="4">4</button>
      <button type="submit" name="button" value="5">5</button>
      <button type="submit" name="button" value="6">6</button>
      <button type="submit" name="button" value="*">*</button>
      <br>
      <button type="submit" name="button" value="1">1</button>
      <button type="submit" name="button" value="2">2</button>
      <button type="submit" name="button" value="3">3</button>
      <button type="submit" name="button" value="-">-</button>
      <br>
      <button type="submit" name="button" value="0">0</button>
      <button type="submit" name="button" value=".">.</button>
      <button type="submit" name="calculate" value="=">=</button>
      <button type="submit" name="button" value="+">+</button>
      <br>
      <button type="submit" name="clear" value="C">C</button>
    </form>

   
  </div>

</body>
</html>
