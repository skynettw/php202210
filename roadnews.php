<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>馬路消息</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2 class="alert alert-primary">馬路消息</h2>
      <hr>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "12345678";
            $dbname = "newsdb";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id, news, pdate FROM roadnews order by pdate desc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table class='table table-striped'>";
              echo "<tr><th>編號</th><th>馬路消息</th><th>張貼日期</th></tr>";
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo  "<td>" . $row["id"] .   "</td>" .
                      "<td>" . $row["news"] . "</td>" . 
                      "<td>" . $row["pdate"] ."</td>";
                echo "</tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
            $conn->close();
        ?>
        <hr>
        <a class="btn btn-warning btn-sm" href="/php202210/">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>