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
<title>ویرایش فایل</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/admin_pages.css" />
<link rel="stylesheet" href="pagination/css/pagination.css" type="text/css">
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
             <style>.upload{color: #2d89a3;} </style>
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
        <p align="center" class="cont_text" dir="rtl">ویرایش و به روز رسانی مطلب<br><span></span></p>
   
   
          <?php
          require("dbcon.php");
          $id =$_REQUEST['id'];
          
          $result = mysql_query("SELECT * FROM files WHERE id = '$id'");
          $test = mysql_fetch_array($result);
          if (!$result) 
                  {
                  die("Error: Data not found..");
                  }
                         
		  $name=$test['name'] ;
		  $file=$test['file'] ;
		  //$cate=$test['category'] ;
		  //$subcate=$test['subcate'] ;
		  //$details=$test['details'] ;	
		  $jalali_date=$test['date'] ;	
		  $status=$test['status'] ;		
		  
		   // Using Persian Calender here
		  $timezone = 16200;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
		  $now = date("Y-m-d", time()+$timezone);
		  $time = date("H:i:s", time()+$timezone);
		  list($year, $month, $day) = explode('-', $now);
		  list($hour, $minute, $second) = explode(':', $time);
		  $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		  include ('jdf.php');
		  // Using Persian Calender here
		  
		  
          if(isset($_POST['save']))
          {	
             
			  $name_save = $_POST['name'];
			  $file_save = $_POST['url'];
             // $cate_save = $_POST['category'];
             // $subcate_save = $_POST['subcategory'];
             // $details_save = $_POST['details'];
              $jalali_date = jdate("l، d p",$timestamp);
              $status_save = $_POST['status'];
          
              mysql_query("UPDATE files SET name ='$name_save', file ='$file_save', date ='$jalali_date', status ='$status_save' WHERE id = '$id'")
                          or die(mysql_error()); 
              // cartoonized: category ='$cate_save', subcate ='$subcate_save', details ='$details_save', 
              echo'<div id="editsuccess" dir="rtl">
					  <p>فایل ویرایش گردید.</p>
					  <a href="../admin/upload.php"><button id="close">بسته</button></a>
				  </div>';
              
          mysql_close();	
                      
          }
          mysql_close($con);
          ?>

    <!-- Start_of_from -->  

   
         <!--Strat_forms-->      
       <div align="left">
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
             <fieldset class="form">
                <legend align="right" dir="rtl">ویرایش فایل</legend>
                <p id="img-note" dir="rtl" align="right">پرکردن فرمهای با این نشان <span>*</span> لازم است.</p>
                <div class="cartoon">
                  <br><br>
                  </div-->
                  <div class="pdfupload" align="right"> 
                  <a href="../kcfinder/browse.php" target="_blank">
                  <input type="button" id="uploadbutton" value="فایلهای سرور"></a>
                  </div>
                  <br>
                    <div id="img-forms"> <!--img-forms-->
                       <label  for="name">آدرس</label>
                       <input type="text" name="url" value="<?php echo $file ?>"  dir="" class="form-input"><br><br>
                       <label  for="name">عنوان</label>
                       <input type="text" name="name" value="<?php echo $name ?>" dir="rtl" class="form-input"><br><br>
                    </div><!--img-forms-->
                  </div>
                  <br><br>
                  
                  <div id="img-btn" class="pdfbtns" align="right">
                  وضعیت <span>*</span>&nbsp;&nbsp; 
                  <label for="status">
                  <input type="radio" name="status" value="show" id="status_0" required/>نمایش</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <label for="status">
                  <input type="radio" name="status" value="hide" id="status_0" required/>پنهان</label>
                  <br><br>
                  <input type="reset" name="reset" value="پاک کردن فرم" id="button" />
                  <br>
                  <input type="submit" name="save" value="ویرایش فایل" id="button" />&nbsp;
                  </div>
            </fieldset>
        </form>
       </div>
      </div>
     <!--Main PHP Interface-->    
     </td>
   </tr>
</table>

<!-- End_of_Content -->
<!--Footer-->
       <!--Page Numbeers--> 
    <?php
	include 'footer.php';
	?>
<!--End_footer_End-->
</body>
</html>