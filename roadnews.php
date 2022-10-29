<?php include("header.php");
      include("menu.php");
?>
    <div class="container">
      <h2 class="alert alert-primary">馬路消息</h2>
      <hr>
      <form action="addnews.php" method="POST">
	 News:<input type=text size=40 name="title" required> 
         <input type=submit value="Post it">  
      </form>
        <?php
            $servername = "localhost";
            $username = "nkustadmin";
            $password = "nkust@123!";
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
              echo "<tr><th>編號</th><th>馬路消息</th><th>張貼日期</th><th>Manage</th></tr>";
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo  "<td>" . $row["id"] .   "</td>" .
                      "<td>" . $row["news"] . "</td>" . 
		      "<td>" . $row["pdate"] ."</td>" .
		      "<td><a href='del.php?id=" . $row["id"] . 
		             "' class='btn btn-sm btn-outline-warning'>Delete</a></td>";
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
<?php include("footer.php");
