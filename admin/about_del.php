<?php
  include("dbcon.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	$query1 = mysql_query("DELETE from about WHERE id = '$id' ")
	or die(mysql_error());  	
	
	?>
    <script>
	//alert("Records Deleted Successfully!"); 
	window.location = "about_add.php"; 
    </script>
    <?php
	
mysql_close();	
	?>