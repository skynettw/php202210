<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI計算</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="alert alert-primary" role="alert">身體質量指數計算</h1>
      <hr>
    <form action="bmi.php" method="post">
        身高：<input type="text" name="height" value=1.8 size=4 required>公尺<br>
        體重：<input type="text" name="weight" value=80 size=4>公斤<br>
        <input type="submit" value="開始計算">
    </form>
        <?php
            $h = $_POST["height"];
            if ($h != "") {
              $w = $_POST["weight"];
              $bmi = $w / $h**2;
              echo "Your BMI is $bmi<br>";
              if ($bmi >= 18.5 && $bmi < 24) {
                echo "<br><span class='alert alert-primary' role='alert'>你有一個正常的體態！</span>";
              }  else {
                echo "<br><span class='alert alert-danger' role='alert'>你可能要關心一下你自己的體重喔！</span>";
              }
            }
        ?>
        <hr>
        <a class="btn btn-warning btn-sm" href="/php202210/">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>