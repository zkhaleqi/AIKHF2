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
<title>پیامها</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/inbox_pages.css" />
<link rel="stylesheet" href="pagination/css/pagination.css" type="text/css">
<link rel="icon" type="image/png" href="favicon.ico"/>
</head>
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
             <style>.inbox{color: #2d89a3;} </style>
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
    <p align="center" class="cont_text" dir="rtl"> پیامهای دریافتی تماس گیرنده ها</p>
     
   <!--Main PHP Interface-->
  <!--Start_PHP_forms_table-->  
	  <?php
          include 'dbcon.php';
          error_reporting(0);
          if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
          $start_from = ($page-1) * 10;
          $select = mysql_query("SELECT * from fmail ORDER BY id DESC LIMIT $start_from, 10");
          if(isset($_POST['submit']))
          {
            for($i=1;$i<=$_POST['hidden'];$i++)
            {
              $query2 = mysql_query("SELECT file from fmail WHERE id = ' ".$_POST["hioddenid$i"]." ' ");
              while($file = mysql_fetch_array($query2))
              {   
			  $query1 = mysql_query("DELETE from fmail WHERE id = ' ".$_POST["hioddenid$i"]." ' ");
                $unlink = unlink('../files/inbox/'.$file['file']);
                if($query1)
                  {
                 echo'<div id="delsuccess">
				      <p dir="rtl">پیام با موفقيت حذف گردید.</p>
				     <a href="../admin/inbox.php"><button id="close">بسته</button></a>
			        </div>';
			        } 
				   else
				    {
					echo'<div id="error" dir="rtl">
				      <p>مشکلی در حذف فایل وجود دارد!</p>
					  <p>مشکلات ممکن:</p>
					  <span>&loz; فایل قبلن حذف گردیده است.</span><br>
					  <span>&loz; اسم فایل تغییر کرده است.</span><br>
					  <span>&loz; فایل به مکان دیگری جابجا شده است.</span><hr size="1" color="#333">
					  <span>برای پاک کردن این پیام از <i>(حذف)</i> ساده استفاده کنید.</span><br>
					  <i><span></span</i><br>
				      <a href="../admin/inbox.php"><button id="close">بسته</button></a>
			        </div>';
				  }
				}
			  }
			}
		?>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <table id="sql_table" cellpadding="5" dir="rtl">
              <tr class="sql_ctable-th">
       <!--           <th class="bordert" id="borderr">انتخاب</th>  -->
                  <th class="bordert">شماره</th>
                  <th class="bordert">فرستنده</th>
                  <th class="bordert">موضوع</th>
                  <th class="bordert">تاریخ</th>
                  <th class="bordert" id="borderl" colspan="2">عملیلت</th>
              </tr>
                  <?php
					  $i = 0;
					  while($row = mysql_fetch_array($select))
					  {
					  $i = $i + 1;
                  ?>
                  
                  <?php  
				  $target = "../files/inbox/";
                  $target = $target . basename( $_FILES['file']['name']);
				  ?> 
                  <?php $subject = $row['subject'] ?>
                  <?php $id = $row['id'] ?>
                  <script>
				  function ConfirmDelete()
				  {
					var x = confirm("آیا از حذف پیام/های انتخاب شده مطمئین هستید؟");
					if (x)
						return true;
					else
					  return false;
				  }
				  </script>
              <tr class="sql_ctable-td"> 
                  
  <!--                <td id="select" class="borderr"><input type="checkbox" name="hioddenid<?php /* echo $i; ?>" value="<?php echo $row['id']; */ ?>" /></td>-->
                  <td id="id"><?php echo $row['id']; ?></td>     
                  <td id="name"><?php echo $row['name']; ?></td>
                  <td id="subject"><?php echo"<a href ='inbox_mail.php?subject=$subject && id=$id' id='title'>";?><?php echo $row['subject'];?><?php "</a>";?></a></td>
                   <td id="name"><?php echo $row['date']; ?></td>
                  <td id="update" width="20"> <?php echo"<a href ='inbox_mail.php?subject=$subject && id=$id'><input type='button'  id='del-n-edit' value='متن پیام' ></a>";?></td>
                  <td id="delete" class="borderl" width="15"> <?php echo"<a href ='inbox_del.php?id=$id'><input type='button' Onclick='return ConfirmDelete()'  id='del-n-edit' value='حذف' ></a>";?></td>
                  
                  <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['file'];?>" />
              </tr>
                  <?php } ?>
              <tr class="ctable">
              
                  <td colspan="7" align="center" id="delete" class="delete">
              
                  <!--Page Numbeers-->
                 <?php include 'pagination/mail-page.php';	?>
                 <!--Page Numbeers--> 
                  </td> 
              </tr>
          </table>
      </form>
       <!--End_PHP_forms_table-->  
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