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
<?php
include 'dbcon.php';
$subject =$_REQUEST['subject'];
error_reporting(0);
$select = mysql_query("SELECT * FROM fmail WHERE subject = '$subject'"); ?>
<?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
<?php $subject = $row['subject'] ?>
<title><?php echo $row['subject']; ?></title>
<?php }; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/inbox_pages.css" />

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
       <?php
include 'dbcon.php';
$id =$_REQUEST['id'];
error_reporting(0);
$select = mysql_query("SELECT * FROM fmail WHERE id='$id' ORDER BY id DESC LIMIT 0,1"); ?>
<?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
<?php $id = $row['id'] ?>                  
    <p align="center" class="cont_text" dir="rtl">پیام (<span><?php echo $row['subject']; ?></span>)</p>
<?php }; ?>
   <!--Main PHP Interface-->
  <!--Start_PHP_forms_table-->  

       <?php
          require("dbcon.php");
          $id =$_REQUEST['id'];
          include 'dbcon.php';
          error_reporting(0);
          $select = mysql_query("SELECT * FROM fmail WHERE id='$id' ORDER BY id DESC LIMIT 0,1");
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
                   echo'<div id="delsuccess" dir="rtl">
				      <p>پیام با موفقيت حذف گردید.</p>
				     <a href="../admin/inbox.php"><button id="close">بسته</button></a>
			        </div>';
                  } 
                 else
                  {
                  echo'<div id="error" dir="rtl">
				      <p>مشکلی در حذف فایل ضمیمه وجود دارد!</p>
					  <p>مشکلات ممکن:</p>
					  <span>&loz; فایل قبلن حذف گردیده است.</span><br>
					  <span>&loz; فایل تصویر تغییر کرده است.</span><br>
					  <span>&loz; فایل به مکان دیگری جابجا شده است.</span><hr size="1" color="#333">
					  <span>برای پاک کردن این مطلب از <i>(حذف)</i> ساده استفاده کنید.</span><br>
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
                  <th class="bordert" id="borderr">فرستنده</th>
                  <th class="bordert">ایمل</th>
                  <th class="bordert">موضوع</th> 
                  <th class="bordert">تاریخ</th>
                  <th class="bordert">ضمیمه</th>  
                  <th class="bordert" id="borderl" colspan="3">عملیات</th>
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
                  <?php $id = $row['id'] ?>
                  
              <tr class="sql_ctable-td"> 
                  <td id="borderr"><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['date']; ?></td> 
                  <td> <a href="download.php?filename=<?php echo $row['file'];?>"><img src="../images/attachment-mini.png" alt="file"/></a></td> 
                  <td id="update"><input type="checkbox" name="hioddenid<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                  <td id="update" width="20">
                   <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['file'];?>" />
                   <input type="submit" name="submit"  Onclick="return ConfirmDelete()" id="del-n-edit" value="حذف با ضمیمه"/>
                  </td>
                  <td id="delete" class="borderl"  width="10"> <?php echo"<a href ='inbox_del.php?id=$id'><input type='button'  Onclick='return ConfirmDelete()' id='del-n-edit' value='حذف'></a>";?></td>
              </tr>
              <tr id="mail_msg" align="center">
                  <td class="borderr" id="borderl" colspan="8">پیام</td>
              </tr>
              <tr class="mail" id="mail">
                  <td class="borderl" id="borderr"  colspan="8"><p><?php echo $row['message']; ?></p></td>
              </tr>       

                  <?php } ?>
              <tr class="ctable">
                  <input type="hidden" name="hidden" value="<?php echo $i; ?>" />
                  <td colspan="8" align="center" id="delete" class="delete">
                  <a href="inbox.php"><input type="button" value="لیست پیامها" id="button"></a> &nbsp; &nbsp;
                  </td> 
              </tr>
          </table>
      </form>
       <!--End_PHP_forms_table--> </div>  
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