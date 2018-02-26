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
<title>ویرایش گالری عکس</title>
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
             <style>.slide{color: #2d89a3;} </style>
             <!--/* Start_Top_Title_bar */  -->                                                       
             <div class="table-header">
             <h2>مدیریت ویب سایت</h2>
             </div>
             <!--/* End_Top_Title_bar */-->
        </div>
        
        <!--Start_Admin/Clease/Teacher/Students-->
          <?php include 'sec-nav.php'; ?>
        <!--End_Admin/Clease/Teacher/Students-->
                          
    <p align="center" class="cont_text" dir="rtl"> ویرایش و به روز رسانی مطلب <br><span>(تصویر مطلب قابل ویرایش نبوده در صورت تغییر تصویر بایستی مطلب با تصویر جدید اضافه کنید.)</span></p>


<?php
require("dbcon.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM fslide WHERE id = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$author=$test['author'] ;
				$album=$test['album'] ;
				$imgdetails=$test['imgdetails'] ;
				$des= $test['details'] ;
				$date= $test['date'] ;
				$jalali_date= $test['fdate'] ;
										
				

if(isset($_POST['save']))
{	
	$author_save = $_POST['author'];
	$album_save = $_POST['name'];
	$imgdetails_save = $_POST['imgdetails'];
	$des_save = $_POST['details'];
	$date_save = $_POST['date'];
	$jalali_date_save = $_POST['fdate'];

	mysql_query("UPDATE fslide SET author ='$author_save', album ='$album_save', imgdetails ='$imgdetails_save', details ='$des_save', date ='$date_save', fdate ='$jalali_date_save' WHERE id = '$id'")
				or die(mysql_error()); 
	
 echo'<div id="editsuccess" dir="rtl">
		  <p>تصویر ویرایش گردید.</p>
		  <a href="../admin/slide.php"><button id="close">بسته</button></a>
	  </div>';
	
mysql_close();	
			
}
mysql_close($con);
?>
<?php
		 // Using Persian Calender here
        $timezone = 0;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
		$now = date("y-m-d", time()+$timezone);
		$time = date("H:i:s", time()+$timezone);
		list($year, $month, $day) = explode('-', $now);
		list($hour, $minute, $second) = explode(':', $time);
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		include ('jdf.php');
		// Using Persian Calender here
		 ?>

   <div class="separator">
    <!-- Start_of_from -->  
     
        <div align="left">
          <form method="post">
            <fieldset class="form">
                <legend align="right">ویرایش تصویر</legend>
                <div align="right">
                
                <div id="name-and-pic" align="right">
                     <div id="slide-author">
                      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" name="author"  value="<?php echo $author?>" class="form-input" dir="rtl" maxlength="100"/>&nbsp;
                      <label  for="author"> نویسنده </span></label>
                      </div>
                      <br>
                      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="text" name="name"  value="<?php echo $album?>"  class="form-input" placeholder=" در قسمت نام آلبوم دقت کنید" dir="rtl" maxlength="100">&nbsp;
                      <label  for="sname"> آلبوم </span></label>
                      </div>
                      <br>
                 <p id="slide-details" align="right">
                  <label  for="imgdetails" dir="rtl"> شرح تصویر</label>
                  <textarea name="imgdetails" class="form-input" id="slide-details-txt" placeholder="توضیحات تصویر حداکثر 200 کلمه" maxlength="200"><?php echo $imgdetails ?></textarea>
                  </p>
                  
                  <p id="slide-album-details" align="right">
                  <label  for="details" dir="rtl"> شرح البوم</label>
                  <textarea name="details" class="form-input" id="slide-details-txt" placeholder="برای هر آلبوم فقط یک شرع عمومی و نویسنده لازم است."><?php echo $des ?></textarea>
                  </p>
                  <div id="slide-edit-date">
                  <input type="text" name="date" value="<?php echo $datetime=date("M d, Y"); //date time  ?>" class="form-input" dir="rtl"/>
                  <input type="text" name="fdate" value="<?php echo $jalali_date = jdate("l d p Y",$timestamp); //date time  ?>" class="form-input" dir="rtl"/>
                  <br>
                  <input type="reset" name="reset" value="حالت اول" id="slide-button" />
                  <input type="submit" name="save" value="ویرایش" id="slide-button" />
                </div>
                </div>           
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