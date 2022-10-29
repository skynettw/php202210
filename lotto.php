<?php 
  include("header.php");
  include("menu.php");
?>
<div class="container">
        <?php
            echo "Your lucky numbers are as the follows:<br>";
            for($i=0; $i<6; $i++) {
                echo "<span class='badge rounded-pill text-bg-danger'>" . 
                    rand(1, 49) . 
                    "</span> ";
            } 
        ?>
        <hr>
        <a class="btn btn-warning btn-sm" href="/php202210/">Back</a>
 </div>
<?php include("footer.php"); ?>
