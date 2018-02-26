<?php
session_start();
  if (isset($_SESSION['username']) && isset ($_SESSION['password'])){
	  } else {
	  echo '<script> 
	  window.location = "../login.php"; 
	  </script>';
	  }
?>
<html>
<head>
<title>ویدیو ها</title>
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
     <p align="center" class="cont_text" dir="rtl">اضافه کردن متن درباره ما <br><span>با استفاده از فرم زیر متن جدید درباره ما به دیتابیس سایت اضافه کنید. </span></p>
        <!--Main PHP Interface-->
        
        <?php
			include 'dbcon.php';
			error_reporting(E_ALL ^ E_NOTICE);
			if(isset($_POST['submit']))
			{
			include ('jdf.php');
			$datetime=date("M d, Y"); //date time
			$jalali_date = jdate("l d p Y",$timestamp);
			$jalali_date_s = jdate("y/m/d",$timestamp);
			$month = jdate("p",$timestamp);
			$year = jdate("Y",$timestamp); 
			$text = $_POST['text'];
			$fdate = $jalali_date;
			$query = "INSERT INTO `about` (`text`, `date`) VALUES ('$text', '$fdate')";
			$sql = mysql_query($query); 
			if(isset($_POST['submit']))
			{
			echo 'متن جدید موفقانه ثبت گردید.';
			}
			else
			{
			echo ' <script> 
				alert("Link not Added!");
				window.location = "links_add.php"; 
				</script>';
			}
			}
			?>       
         <!--Strat_forms-->      
       <div align="right" dir="rtl" >
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
             <fieldset class="form">   
              <legend>متن درباره ما</legend>   
                  <textarea rows="15" cols="120" placeholder="متنی را که می خواهید در بخش درباره ما در وبسایت منتشر شود را اینجا تایپ نموده  بر روی دکمه اضافه کن کلیک نمایید." maxlength="150" style="max-width:900px;" name="text"></textarea>
                  <br><br>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                  
                  <input type="submit" name="submit" value="اضافه کن" id="button" />&nbsp; &nbsp;
            </fieldset>
        </form>
      </div>
      <!--end_forms--> 
      
        <!--Start_PHP_forms_table-->  
	  <?php
          include 'dbcon.php';
          error_reporting(E_ALL ^ E_NOTICE);
          $select = mysql_query("SELECT * from about ORDER BY id DESC"); 
	      mysql_close();	
	      
	       ?>
	  
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <table id="sql_table" cellpadding="5" dir="rtl">
              <tr class="sql_ctable-th">
                  <th class="bordert">شماره</th>
                  <th class="bordert">متن</th>
                  <th class="bordert">تاریخ</th>
                  <th class="bordert" id="borderl" colspan="2">عملیات</th>
                  <?php
					  $i = 0;
					  while($row = mysql_fetch_array($select))
					  {
					  $i = $i + 1;
                  ?>
                  <?php $id = $row['id'] ?>

              <tr class="sql_ctable-td"> 
                  
                  <td id="id"><?php echo $row['id']; ?></td>
                  <td id="des"><?php echo $row['text']; ?></td>
                  <td id="des"><?php echo $row['date']; ?></td>
    <!--              <td id="update" width="20"> <?php /* echo"<a href ='links_edit.php?id=$id'><input type='button' id='del-n-edit' value='ویرایش'></a>"; */ ?></td>  -->
                  <td id="delete" class="borderl" id="borderb" width="15"> <?php echo"<a href ='about_del.php?id=$id'><input type='button'id='del-n-edit' value='حذف' title='Deletes data from database'></a>";?></td>
             </tr>
             <?php } ?>
             <td class="bordert" colspan="6"></td>
          </table>
      </form>
       <!--End_PHP_forms_table--> 
       <!--Main PHP Interface-->
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