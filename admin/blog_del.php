<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
  include("dbcon.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	//mysql_query("DELETE FROM class WHERE cid = '$id'")
	$query1 = mysql_query("DELETE from farticles WHERE id = '$id' ")
	or die(mysql_error());  	
	
	?>
    <script>
	window.location = "blog_add.php"; 
    </script>
    <?php
	
mysql_close();	
	?>