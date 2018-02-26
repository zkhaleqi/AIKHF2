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
     <p align="center" class="cont_text" dir="rtl">اضافه کردن ویدیو <br><span>با استفاده از فرم زیر عضو جدید به دیتابیس سایت اضافه کنید. </span></p>
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
			$title = $_POST['title'];
			$description = $_POST['description'];
			$frameCode = $_POST['code'];
			$fdate = $jalali_date;
			$author = $_POST['author'];
			$link = $_POST['link'];
			$sql = mysql_query("INSERT INTO `videos` (`title`, `description`, `frameCode`, `link`, `fdate`, `author`) VALUES ('$title', '$description', '$frameCode', '$link', '$fdate', '$author')"); 
			if(isset($_POST['submit']))
			{
			
			echo 'ویدیو جدید موفقانه ثبت گردید.';
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
              <legend>اپلود ویدیو جدید </legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label  for="title">عنوان ویدیو</span></label> &nbsp;    
                  <input type="text" name="title"  class="form-input" id="form-input"  required>
                  <br><br>&nbsp;&nbsp;&nbsp;
                  
                  <label  for="description"> توضیحات ویدیو</span></label> &nbsp;    
                  <input type="text" name="description"  class="form-input" id="form-input"  required>
                  <br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <label  for="code">فریم کد ویدیو</span></label> &nbsp;    
                  <input type="text" name="code"  class="form-input" id="form-input"  required>
                  <br><br>
                  
                  
                  <label  for="code">لینک یوتیوب ویدیو</span></label> &nbsp;    
                  <input type="text" name="link"  class="form-input" id="form-input"  required>
                  <br><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <label  for="author">نشر کننده</span></label> &nbsp;    
                  <input type="text" name="author"  class="form-input" id="form-input"  required>
                  <br><br>
                  
                  <input type="submit" name="submit" value="اضافه کردن ویدیو" id="button" />&nbsp; &nbsp;
                 <input type="reset" name="reset" value="پاک کردن فرم" id="button" />
            </fieldset>
        </form>
      </div>
      <!--end_forms--> 
      
        <!--Start_PHP_forms_table-->  
	  <?php
          include 'dbcon.php';
          error_reporting(E_ALL ^ E_NOTICE);
          $select = mysql_query("SELECT * from videos ORDER BY id DESC"); 
	      mysql_close();	
	      
	       ?>
	  
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <table id="sql_table" cellpadding="5" dir="rtl">
              <tr class="sql_ctable-th">
         <!--       <th class="bordert" id="borderr">انتخاب</th>   -->
                  <th class="bordert">شماره</th>
                  <th class="bordert">عنوان</th>
                  <th class="bordert">توضیحات</th>
                  <th class="bordert">لینک تماشای ویدیو در یوتیوب</th>
                  <th class="bordert" id="borderl" colspan="2">عملیات</th>
                  <?php
					  $i = 0;
					  while($row = mysql_fetch_array($select))
					  {
					  $i = $i + 1;
                  ?>
                  <?php $id = $row['id'] ?>

              <tr class="sql_ctable-td"> 
                  
              <!--    <td id="select" class="borderr"><input type="checkbox" name="hioddenid<?php /* echo $i; ?>" value="<?php echo $row['id']; */ ?>" /></td>  -->
                  <td id="id"><?php echo $row['id']; ?></td>
                  <td id="des"><?php echo $row['title']; ?></td>
                  <td id="des"><?php echo $row['description']; ?></td>
                  <td id="des"><a href="<?php echo $row['link']; ?>" target="_blank" >تماشای <?php echo $row['title']; ?> در یوتیوب</a></td>
                 <!-- <td id="update" width="20"> <?php /* echo"<a href ='links_edit.php?id=$id'><input type='button' id='del-n-edit' value='ویرایش'></a>"; */ ?></td> -->
                  <td id="delete" class="borderl" id="borderb" width="15"> <?php echo"<a href ='video_del.php?id=$id'><input type='button'id='del-n-edit' value='حذف' title='Deletes data from database'></a>";?></td>
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