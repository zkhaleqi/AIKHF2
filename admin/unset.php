  <?php
	  session_start();
	  session_destroy();
  ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
  <script> 
	  alert("شما از صفحه مدیریت خارج گردیدید.");
	  window.location = "../login.php"; 
  </script>