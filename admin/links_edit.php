<?php
session_start();
  if (isset($_SESSION['username']) && isset ($_SESSION['password'])){
	  } else {
	  echo '<script> 
	  window.location = "../login"; 
	  </script>';
	  }
?>
<html>
<head>
<title>لینکستان</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/admin_pages.css" />

<link rel="icon" type="image/png" href="favicon.ico"/>
</head>
<link rel="icon" type="image/ico" href="favicon.ico"/>
<link rel="shortcut icon" href="favicon.png"/>
<link rel="icon" type="image/png" href="favicon.ico"/>
<!-- The Head Ends Here -->
<!-- The Body Starts Here -->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- table Body -->
<table class="Table_01" width="1024" border="0" cellpadding="0" cellspacing="0" align="center">     
    <!--Start_Content--> 
	<tr>
	    <td align="center" width="1024" class="content">
        <!-- table header -->
        <div class="header">
             <style>.top-10{color: #2d89a3;} </style>
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
      <p align="center" class="cont_text" dir="rtl"> ویرایش و به روز رسانی مطلب </p>


<?php
require("dbcon.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM flinks WHERE id = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
	            $title=$test['title'] ;
				$url=$test['url'] ;					
				

if(isset($_POST['save']))
{	
	$title_save = $_POST['title'];
	$url_save = $_POST['url'];

	mysql_query("UPDATE flinks SET title ='$title_save', url ='$url_save' WHERE id = '$id'")
				or die(mysql_error()); 
		   ?>
		  <script> 
		 window.location = "links_add.php"; 
		  </script>
		  <?php
              
          mysql_close();	
                      
          }
          mysql_close($con);
          ?>

    <!-- Start_of_from -->  
     
        <div align="right" dir="rtl">
         <form method="post" >
             <fieldset class="form" dir="rtl">
              <legend> ویرایش لینک</legend>
                  <label  for="title">عنوان </span></label> &nbsp; 
                  <input type="text" name="title"  value="<?php echo $title ?>" class="form-input" required>
                  <br><br>
                  <label  for="url">آدرس </span></label> &nbsp;
                  <input type="text" name="url" value="<?php echo $url ?>"placeholder=" مثلن: www.google.com  " class="form-input" id="form-input" >
                  <br><br>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 
                 <input type="submit" name="save" value="ویرایش لینک" id="button" /> 
                &nbsp; &nbsp;
                <input type="reset" name="reset" value="حالت اول" id="button" />
            </fieldset>
        </form>
        </div>
        
    <!-- End_of_from -->
      </div> 
   </td>
   </tr>
</table>

<!-- End_of_Content -->
<!--Footer-->
    <?php
	include 'footer.php';
	?>
<!--End_footer_End-->
  
</body>
</html>