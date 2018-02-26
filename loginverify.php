<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
	try {
		require_once 'dbcon.php';
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
			$start_from = ($page-1) * 10; 
		$sql = 'SELECT * from login';
		$rs_result = $db->query($sql);
	} 
	catch (Exception $e) {
	}

	while ($row = $rs_result->fetch(PDO::FETCH_ASSOC)){
	session_start();
	$_SESSION['username']=$row['username'];
	$_SESSION['password']=$row['password'];

	$username=$_POST['txtusername'];
	$password=$_POST['txtpassword'];

	$query="SELECT * FROM `login`;";
	
	$tbl=mysql_query($query,$con);
	$row=mysql_fetch_array($tbl);
	$dbuser=$row['username'];
	$dbpass=$row['password'];
	if($dbuser==$username and $dbpass==$password)
	
	{ 
	?>
	<script> 
		window.location = "admin/admin.php"; 
    </script>
	<?php	
	}
	else
	{ 
    ?>
    <script> 
	window.location = "index.php"; 
	alert("نام کاربری و یا پسورد اشتباه است.");
    </script> 
    <?php
	}
mysql_close();	}
	?>
	