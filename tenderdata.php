<?php
    include 'db.php';
    
    	$sql = "SELECT * FROM tender where status='active' ORDER BY id DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               echo '<div class="job-item"><div class="job-title"><h3>'.$row["title"].'</h3></div>
                     <div class="job-desc"><p>'.$row["short_desc"].'</p></div><div class="applybtn"><a href="contact.html"><button>Know More
                     </button></a></div></div>';
                }
         } else {
               echo "<img src='img/no-result.jpg' style='display: block; width:30%; margin-left:auto; margin-right:auto;'>";
          }
    $conn->close();
?>


