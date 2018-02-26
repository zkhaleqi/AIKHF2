<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
  include("dbcon.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	$query1 = mysql_query("DELETE from fslide WHERE id = '$id' ")
	or die(mysql_error());  	
	
	?>
	    <script> 
        window.location = "slide.php"; 
        </script>
   <?php	
  mysql_close();	
      ?>