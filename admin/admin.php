<?php
session_start();
?>
<html>
<head>
<title>مدیریت</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/inbox_pages.css" />
<link rel="stylesheet" type="text/css" href="../css/admin-notify.css" />

<link rel="icon" type="image/png" href="favicon.ico"/>
</head>
<link rel="icon" type="image/ico" href="favicon.ico"/>
<link rel="shortcut icon" href="favicon.png"/>
<link rel="icon" type="image/png" href="favicon.ico"/>
<!-- The Head Ends Here -->
<link rel="icon" type="image/ico" href="favicon.ico"/>
<link rel="shortcut icon" href="favicon.png"/>
<link rel="icon" type="image/png" href="favicon.ico"/>

<!-- The Body Starts Here -->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- table Body -->
<table class="Table_01" width="1024" border="0" cellpadding="0" cellspacing="0" align="center">     
    <!--Start_Content--> 
	<tr>
	    <td align="center" width="1024" class="content">
        <!-- table header -->
        <div class="header">
             <style>.admin{color: #2d89a3;} </style>
             <!--/* Start_Top_Title_bar */  -->                                                       
             <div class="table-header">
             <h2>مدیریت ویب سایت</h2>
             </div>
             <!--/* End_Top_Title_bar */-->
        </div>
        <!--Start_Admin/Clease/Teacher/Students-->
          <?php include 'sec-nav.php'; ?>
        <!--End_Admin/Clease/Teacher/Students-->
          <div class="separator">
          <div id="admin"><!-- Admin-->
          <p align="center" class="admin_text">
       <?php
       if (isset($_SESSION['username']) && isset ($_SESSION['password']))
	        {
	   echo 'Welcome '. $_SESSION['username'] . '! <br>';	
	        } else {
	   echo '<script>
			  window.location = "../login.php"; 
			 </script>';
		     }
		?>
          
             Administration Page  
            </p> 
            
            <script type="text/javascript">
			function newPopup(url) {
			popupWindow = window.open(
				url,'popUpWindow','height=600,width=1024,left=100,top=30,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')
			}
			</script>
           
           <p align="center" dir="rtl">با استفاده از قسمتهای بالا مطالب ویب سایت را مدیریت کنید.</p>
           <p class="logout-btn"><a href="JavaScript:newPopup('../guide.php');"> <span id="guide">رهنمایی لازم برای مدیر سایت</span></a></p>
           <!--p class="logout-btn"><a href="../images/layout-map.png" target="_blank"> <span>نقشه سایت</span></a></p-->
           <p class="logout-btn"><span class="md-trigger" data-modal="modal-1"><i>تغییر نام کاربری و پسوورد</i></span></p>
           <p class="logout-btn"><a href="unset.php"> <span>خروج از مدیریت </span></a></p>
           <p class="logout-btn"><a href="../index.php"> <span>برگشت به صفحه نخست</span></a></p>


              <?php
				require("dbcon.php");
				$result = mysql_query("SELECT * FROM `login`");
				$test = mysql_fetch_array($result);
				if (!$result) 
						{
						die("Error: Data not found..");
						}
								$username=$test['username'] ;
								$password=$test['password'] ;
				
				if(isset($_POST['save']))
				{	
					$username_save = $_POST['username'];
					$password_save = $_POST['password'];
				
					mysql_query("UPDATE `login` SET username ='$username_save', password ='$password_save' ")
								or die(mysql_error()); 
					
					?>
					<script> 
					alert("نام کاربری و پسوورد تغییر گردید!");
					window.location = "../login.php"; 
					
					</script>
					<?php
					
				mysql_close();
				}
				mysql_close($con);
				?>
			</div><!-- Admin-->
            </div>
                  <!-- Admin Login Section -->
                  <div class="cont-all">
                        <div class="md-modal md-effect-1" id="modal-1" draggable="true" dir="ltr">
                          <div id="login-title" align="center" draggable="true">تغییر نام کاربری و پسوورد<span class="md-close"></span></div>
                              <div class="md-content" draggable="true">
                                  <div id="login-content">
                                     <div id="login" align="center">
                                          <form method="post" dir="ltr">
                                            <p><input type="text"     name="username"  placeholder=" (<?php echo $username ?>) ادمین فعلی " value="" class="form-input" required></p>
                                            <p><input type="password" name="password"  placeholder=" (<?php echo $password ?>) پسوورد فعلی " value="" class="form-input" required></p>
                                            <p><input type="submit" name="save" value="تغییر"  class="button"></p>
                                          </form>  
                                      </div> <!--login dvi --> 
                                  </div>
                              </div>
                          </div>
                      <div class="md-overlay"></div><!-- the overlay element -->   
                  </div> 
               <!-- Admin Login Section -->
     </td>
   </tr>
</table>
<!-- End_of_Content -->

<!--Footer-->
    <?php
	include 'footer.php';
	?>
<!--End_footer_End-->
<script src="../js/classie-login.js"></script>
<script src="../js/modalEffects.js"></script>
</body>
</html>