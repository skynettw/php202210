<?php include("header.php");
      include("menu.php");
      include("database.php");
?>
    <div class="container">
      <h2 class="alert alert-primary">Add Video</h2>
      <hr>
      <form action="addnewvideo.php" method="POST">
	 Title:<input type=text size=40 name="title" required> <br/>
         Vid:<input type=text size=15, name="vid" required><br/>
	 List:
	<select>
<?php
	$sql = "select id, name from videolist;";
	$result = $conn->query($sql);
        if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<option value=" . $row["id"] . ">";
		echo $row["name"] . "</option>"; 
              }
	}
?>
         </select>
	 <br/>
         <input type=submit value="Add">  
      </form>
        <?php
            $sql = "SELECT id, title, vid, vlist FROM videos order by id desc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table class='table table-striped'>";
	      echo "<tr><th>ID</th><th>Title</th>" . 
		   "<th>Vid</th><th>Video List</th><th>Manage</th></tr>";
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo  "<td>" . $row["id"] .   "</td>" .
			"<td>" . $row["title"] . "</td>" .
			"<td>" . $row["vid"] . "</td>" . 
			"<td>" . $row["vlist"] . "</td>" . 
		      "<td><a href='delvideo.php?id=" . $row["id"] . 
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
