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
        <?php $selected = "top-10"; ?>
        <!--Start_Admin/Clease/Teacher/Students-->
          <?php include 'sec-nav.php'; ?>
        <!--End_Admin/Clease/Teacher/Students-->
      <div class="separator">                    
     <p align="center" class="cont_text" dir="rtl">اضافه کردن لینک <br><span>با استفاده از فرم زیر مطلب جدید به دیتابیس سایت اضافه کنید. </span></p>
        <!--Main PHP Interface-->
        
        <?php
			include 'dbcon.php';
			error_reporting(E_ALL ^ E_NOTICE);
			if(isset($_POST['submit']))
			{
			
			$title = $_POST['title'];
			$url = $_POST['url'];
			$sql = mysql_query("INSERT INTO `flinks` (`title`, `url`) VALUES ('$title', '$url');"); 
			if(isset($_POST['submit']))
			{
			echo ' ';
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
              <legend> ایجاد لینک جدید</legend>
                  <label  for="title">عنوان</span></label> &nbsp; 
                  <input type="text" name="title"  class="form-input" id="form-input"  required>
                  <br><br>
                  <label  for="url">آدرس</span></label> &nbsp;
                  <input type="text" name="url"  class="form-input" id="form-input" placeholder=" مثلن: www.google.com  " required >
                  <br><br>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                  <input type="submit" name="submit" value="اضافه کردن لینک" id="button" />&nbsp; &nbsp;
                 <input type="reset" name="reset" value="پاک کردن فرم" id="button" />
            </fieldset>
        </form>
      </div>
      <!--end_forms--> 
      
        <!--Start_PHP_forms_table-->  
	  <?php
          include 'dbcon.php';
          error_reporting(E_ALL ^ E_NOTICE);
          $select = mysql_query("SELECT * from flinks ORDER BY id DESC");
         
	   mysql_close();	
	       ?>

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <table id="sql_table" cellpadding="5" dir="rtl">
              <tr class="sql_ctable-th">
                  <!--<th class="bordert" id="borderr">انتخاب</th>-->
                  <th class="bordert">شماره</th>
                  <th class="bordert">عنوان</th>
                  <th class="bordert">آدرس</th>
                  <th class="bordert" id="borderl" colspan="2">عملیات</th>
                  <?php
					  $i = 0;
					  while($row = mysql_fetch_array($select))
					  {
					  $i = $i + 1;
                  ?>
                  <?php $id = $row['id'] ?>
              <tr class="sql_ctable-td"> 
                  
                 <!-- <td id="select" class="borderr"><input type="checkbox" name="hioddenid<?php /* echo $i; ?>" value="<?php echo $row['id']; */ ?>" /></td> -->
                  <td id="id"><?php echo $row['id']; ?></td>
                  <td id="des"><?php echo $row['title']; ?></td>
                  <td id="url"><a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a></td>   
                  <!--<td id="update" width="20"> <?php/* echo"<a href ='links_edit.php?id=$id'><input type='button' id='del-n-edit' value='ویرایش'></a>"; */ ?></td>-->
                  <td id="delete" class="borderl" id="borderb" width="15"> <?php echo"<a href ='links_del.php?id=$id'><input type='button'id='del-n-edit' value='حذف' title='Deletes data from database'></a>";?></td>
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