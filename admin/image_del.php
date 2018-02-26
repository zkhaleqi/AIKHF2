<?php
  include("dbcon.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	//mysql_query("DELETE FROM class WHERE cid = '$id'")
	$query1 = mysql_query("DELETE from fimages WHERE id = '$id' ")
	or die(mysql_error());  	
	
	?>
    <script>
	//alert("Records Deleted Successfully!"); 
	window.location = "image_add.php"; 
    </script>
    <?php
	
mysql_close();	
	?>