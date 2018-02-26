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
<title>مدیریت فایلها</title>
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
                       
    <p align="center" class="cont_text" dir="rtl">اضافه کردن نسخه pdf  ماهنامه به سایت <br><span>با استفاده از فرم زیر مطلب جدید به دیتابیس سایت اضافه کنید. </span></p>
   
         <!--Strat_forms-->      
       <div align="left">
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
             <fieldset class="form">
                <legend align="right" dir="rtl">اضافه کردن فایل جدید</legend>
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
                       <label  for="name">فایل</label>
                       <input type="text" name="url" dir="ltr" align="right" id="pdfname" placeholder="نام فایل همراه با پسوند آن" class="form-input"><br><br>
                       <label  for="name">عنوان</label>
                       <input type="text" name="name" dir="rtl" class="form-input"><br><br>
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
                  <input type="submit" name="submit" value="اضافه کردن فایل" id="button" />&nbsp;
                  </div>
            </fieldset>
        </form>
      </div>
      <!--end_forms-->
        	
  <!--Image-add confrimations here-->   
   <section class="code">
   <?php
        include 'dbcon.php';
        error_reporting(E_ALL ^ E_NOTICE);
		
        // Using Persian Calender here
        $timezone = 12600;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
		$now = date("D M Y", time()+$timezone);
		$time = date("H:i:s", time()+$timezone);
		list($year, $month, $day) = explode('-', $now);
		list($hour, $minute, $second) = explode(':', $time);
		//$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		include ('jdf.php');
		// Using Persian Calender here
	  if(isset($_POST['submit']))
		{
		$file = $_POST['url'];
		$name = $_POST['name'];
		$status = $_POST['status'];
		$jalali_date = jdate("l، d p",$timestamp);
		$sql = mysql_query ("INSERT INTO `files` (`file`, `name`, `date`, `status`) VALUES ('$file',  '$name', '$jalali_date', '$status');");
        /* cortoonized: `category`, `subcate`, `name`, `artist`, `details`, // '$category', '$subcate', '$name', '$artist', '$details',
        /* The code past here is the code at the start of the tutorial */
        /* Outputting each image: */
		?>
        
        <div id="success"  dir="rtl">
		<?php echo 'فایل با موفقيت اضافه گردید.' . "<br>";?>
         <br><a href="../admin/upload.php" id="close"><button id="close">بسته</button></a>
         <?php
		/* Closing the directory */
		@closedir($dir_handle);
		 mysql_close();
		}
		?>
        </div>
     </section>   
      <!--Add_POST_verifications finished here-->
  
     
      </div>
      
      <?php
          include 'dbcon.php';
          error_reporting(0);
		  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
          $start_from = ($page-1) * 10; 
          $select = mysql_query("SELECT * FROM files ORDER BY id DESC LIMIT $start_from, 10");
		  
		  if(isset($_POST['delete']))
          {
            for($i=1;$i<=$_POST['hidden'];$i++)
            {
              $query2 = mysql_query("SELECT file from files WHERE id = ' ".$_POST["hioddenid$i"]." ' ");
              while($file = mysql_fetch_array($query2))
              {
                $unlink = unlink('../kcfinder/files/files/pdf/'.$file['file']);
                if($unlink)
                  {
                  $query1 = mysql_query("DELETE from files WHERE id = ' ".$_POST["hioddenid$i"]." ' ");	
                 echo'<div id="delsuccess" dir="rtl">
				      <p>فایل/ها با موفقيت حذف گردید.</p>
				     <a href="../admin/upload.php"><button id="close">بسته</button></a>
			        </div>';
			        } 
				   else
				    {
					echo'<div id="error"  dir="rtl">
				      <p>مشکلی در حذف فایل وجود دارد!</p>
					  <p>مشکلات ممکن:</p>
					  <span>&loz; فایل  قبلن حذف گردیده است.</span><br>
					  <span>&loz; اسم فایل  تغییر کرده است.</span><br>
					  <span>&loz; فایل  به مکان دیگری جابجا شده است.</span><hr size="1" color="#333">
					  <span>برای پاک کردن این مطلب از <i>(حذف)</i> ساده استفاده کنید.</span><br>
				      <a href="../admin/upload.php"><button id="close">بسته</button></a>
			        </div>';
				  }
				}
			  }
			}
		mysql_close();
		?>
      
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <table id="sql_table" cellpadding="5" dir="rtl">
              <tr class="sql_ctable-th">
                  <th class="bordert" id="borderr">انتخاب</th>
                  <th class="bordert">شماره</th> 
                  <th class="bordert">عنوان</th>
                  <th class="bordert">فایل</th> 
                  <th class="bordert">تاریخ</th>
                  <th class="bordert">وضعیت</th>
                  <th class="bordert" id="borderl" colspan="2">عملیات</th>
              </tr>
                  <?php
					  $i = 0;
					  while($row = mysql_fetch_array($select))
					  {
					  $i = $i + 1;
                  ?>
                  <?php $id = $row['id'] ?>
              <tr class="sql_ctable-td"> 
                  
                  <td id="select" class="borderr"><input type="checkbox" name="hioddenid<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                  <td id="id"><?php echo $row['id']; ?></td>
                  <td id="name"><?php echo $row['name']; ?></td>
                  <td id="name"><a href="../kcfinder/files/files/pdf/<?php echo $row['file']; ?>"><?php echo $row['file']; ?></a></td> 
                  <td id="date"><?php echo $row['date']; ?></td>
                  <td id="name"><?php echo $row['status']; ?></td>
                  <td id="update" width="20"> <?php echo"<a href ='file_edit.php?id=$id'><input type='button'  id='del-n-edit' value='ویرایش'></a>";?></td>
                  <td id="delete" class="borderl" width="15"> <?php echo"<a href ='file_del.php?id=$id'><input type='button'  id='del-n-edit' value='حذف' title='Deletes data from database'></a>";?></td>
                  
                  <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['picture'];?>" />
              </tr>
                  <?php } ?>
             <tr class="ctable">
                <input type="hidden" name="hidden" value="<?php echo $i; ?>" />
                <td colspan="8" align="center" id="delete" class="delete">
                <input type="submit" name="delete" value="حذف کلی" id="button" title="Deletes data from database and files from server" />
                </td> 
            </tr>
          </table>
      </form>
       <!--End_PHP_forms_table--> 
       <!--Page Numbeers-->
	   <?php include 'pagination/file-page.php';?>
       <!--Page Numbeers--> 
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