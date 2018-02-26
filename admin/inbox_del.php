<?php
  include("dbcon.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM fmail WHERE id = '$id'")
	or die(mysql_error());  	
	
	?>
    
   <script>
     window.location = "../admin/inbox.php"; 
     </script> ';
    <?php
	
mysql_close();	
	?>