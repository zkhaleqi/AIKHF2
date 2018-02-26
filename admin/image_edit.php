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
<title>ویرایش تصاویر</title>
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
	    <td align="center" width="1024" 
        class="content">
        <!-- table header -->
        <div class="header">
             <style>.image{color: #2d89a3;} </style>
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
    
            <!--Main PHP Interface-->
		  <!--script language="javascript" type="text/javascript">
          function dropdownlist(listindex)
          {
          
          document.formname.subcategory.options.length = 0;
          
          switch (listindex)
          {
              case "Art-works" :
			      document.formname.subcategory.options[0]=new Option("انتخاب نوع","");
			      document.formname.subcategory.options[1]=new Option("نقاشی ها / Art-works","Art-works");
				  document.formname.subcategory.options[2]=new Option("10 برتر / Top-10","Top-10");
                  break;
				  
              case "Exhibition" :
                  document.formname.subcategory.options[0]=new Option("نوع وجود ندارد","");
                  break;  
				  
			 case "Class" :
                  document.formname.subcategory.options[0]=new Option("نوع وجود ندارد","");
                  break;         

              case "Staffs" :
                  document.formname.subcategory.options[0]=new Option("نوع وجود ندارد","");
                  break;
				  
			  case "Life-sketch" :
                  document.formname.subcategory.options[0]=new Option("نوع وجود ندارد","");
                  break;
          
              case "Teachers" :
                  document.formname.subcategory.options[0]=new Option("نوع وجود ندارد","");
                  break;
			 case "Classes" :
			      document.formname.subcategory.options[0]=new Option("انتخاب نوع","");
                  document.formname.subcategory.options[1]=new Option("Theory/Lecture)","Theory/Lecture");
                  document.formname.subcategory.options[2]=new Option("Pencil Color I","Pencil Color I");
                  document.formname.subcategory.options[3]=new Option("Pencil Color II","Pencil Color II");
                  document.formname.subcategory.options[4]=new Option("Water Color","Water Color");
                  document.formname.subcategory.options[5]=new Option("Oil Color","Oil Color");
                  break;  
			  case "Students" :
			      document.formname.subcategory.options[0]=new Option("انتخاب کلاس","");
                  document.formname.subcategory.options[1]=new Option("Theory/Lecture)","Theory/Lecture");
                  document.formname.subcategory.options[2]=new Option("Pencil Color I","Pencil Color I");
                  document.formname.subcategory.options[3]=new Option("Pencil Color II","Pencil Color II");
                  document.formname.subcategory.options[4]=new Option("Water Color","Water Color");
                  document.formname.subcategory.options[5]=new Option("Oil Color","Oil Color");
                  break;
          }
          return true;
          }
          </script>
          
        <!--  Start_of_from-->
        
		  <?php
          require("dbcon.php");
          $id =$_REQUEST['id'];
          
          $result = mysql_query("SELECT * FROM fimages WHERE id = '$id'");
          $test = mysql_fetch_array($result);
          if (!$result) 
                  {
                  die("Error: Data not found..");
                  }
                         
		  $name=$test['name'] ;
		  $artist=$test['artist'] ;
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
			  $artist_save = $_POST['artist'];
             // $cate_save = $_POST['category'];
             // $subcate_save = $_POST['subcategory'];
             // $details_save = $_POST['details'];
              $jalali_date_save = $_POST['date'];
              $status_save = $_POST['status'];
          
              mysql_query("UPDATE fimages SET name ='$name_save', artist ='$artist_save', date ='$jalali_date_save', status ='$status_save' WHERE id = '$id'")
                          or die(mysql_error()); 
              // cartoonized: category ='$cate_save', subcate ='$subcate_save', details ='$details_save', 
              echo'<div id="editsuccess" dir="rtl">
					  <p>تصویر ویرایش گردید.</p>
					  <a href="../admin/image_add.php"><button id="close">بسته</button></a>
				  </div>';
              
          mysql_close();	
                      
          }
          mysql_close($con);
          ?>

    <!-- Start_of_from -->  
     
        <div align="left">
         <form method="post" id="formname" name="formname" >
             <fieldset class="form">
                <legend align="right">ویرایش تصویر</legend>
                <p id="img-note" dir="rtl" align="right"><span><b>(*) </b></span>پرکردن فرمهای با این نشان لازم است.</p>
                 <div class="cartoon">
                  <!--p id="img-details" align="right">
                  <label  for="details">شرح تصویر</label><br>
                  <textarea name="details" class="form-input" id="details-txt" dir="rtl" placeholder=" حد اکثر 1500 کلمه" maxlength="1500" ><?php echo $details ?></textarea>
                  </p-->
                  <br>
                  <div id="img-forms">
                 <label  for="name">عنوان <span>&nbsp;</span></label>
                 <input type="text" name="name" value="<?php echo $name ?>" dir="rtl" class="form-input" ><br><br>
                 <label  for="artist">نویسنده</label>&nbsp;&nbsp;
                 <input type="text" name="artist" value="<?php echo $artist ?>" dir="rtl" class="form-input" /><br><br>
                 <label  for="artist">تاریخ</label>&nbsp;&nbsp;
                 <input type="text" name="date" value="<?php echo $jalali_date = jdate("l، d p Y",$timestamp); ?>"  dir="rtl" class="form-input" /><br><br>
                 
                 <!--label  for="category">کتگوری<span>*</span></label>&nbsp; 
                 <select name="category" id="category" onchange="dropdownlist(this.options[this.selectedIndex].value);" class="form-input" required>
                      <option value=""            id="option">انتخاب کتگوری</option>
                      <option value="Art-works"   id="option">نقاشی/ Art-works</option>
                      <option value="Exhibition"  id="option">نمایشگاه/ Exhibition</option>
                      <option value="Class"       id="option">کلاس/ Class</option>
                      <option value="Staffs"      id="option">پرسنل/ Staff</option>
                      <option value="Life-sketch" id="option">لایف اسکیچ/ Life Sketch</option>
                      <option value="Teachers"    id="option">استادان/ Teachers</option>
                      <option value="Students"    id="option">شاگردان/ Students</option>
                      <option value="Classes"     id="option">کلاسها/ Classes</option>
                  </select><br><br>
                  <label  for="subcategory">نوع</label>&nbsp; 
				  <script type="text/javascript" language="JavaScript">
                  document.write('<select name="subcategory" class="form-input" id="option"><option value="">انتخاب نوع</option></select>')
                  </script>
                  <noscript>
                  <select name="subcategory" id="subcategory" required>
                     <option value="">Select Subcategory</option>
                  </select>
                  </noscript-->
                  </div>
                  </div>
                  <br><br>
                  <div id="img-btn" align="right">
                  وضعیت <span>*</span>&nbsp;&nbsp; 
                  <label for="status">
                  <input type="radio" name="status" value="show" id="status_0" required/>نمایش</label>
                  &nbsp;&nbsp;&nbsp;
                  <label for="status">
                  <input type="radio" name="status" value="hide" id="status_0" required/>پنهان</label>
                  <br><br>
                  <input type="reset" name="reset" value="حالت اول" id="button" />
                  <br>
                  <input type="submit" name="save" value="ویرایش" id="button" />&nbsp;
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