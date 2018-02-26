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
<title>ویرایش مطالب</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/admin_pages.css" />
</head>
<!-- The Head Ends Here -->
<link rel="icon" type="image/ico" href="favicon.png"></link> 
<link rel="shortcut icon" href="favicon.png"></link>
<!-- The Body Starts Here -->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- table Body -->
<table class="Table_01" width="1024" border="0" cellpadding="0" cellspacing="0" align="center">     
    <!--Start_Content--> 
	<tr>
	    <td align="center" width="1024" class="content">
        <!-- table header -->
        <div class="header">
             <style>.picture {color: #2d89a3;} </style>
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
        <!--Main PHP Interface--> 
        
       <script language="javascript" type="text/javascript">
          function dropdownlist(listindex)
          {
          
          document.formname.subcategory.options.length = 0;
          
          switch (listindex)
          {
             case "HP-Slider" :
			      document.formname.subcategory.options[0]=new Option("سلایدر / HP-Slider","HP-Slider");
				  document.formname.subcategory.options[1]=new Option("خبر ها / News","News");
				  document.formname.subcategory.options[2]=new Option("رویدادها / Events","Events");
				  document.formname.subcategory.options[3]=new Option("گزارش ویژه / S-news","S-news");
				  document.formname.subcategory.options[4]=new Option("اجتماعی / Social","Social");
				  document.formname.subcategory.options[5]=new Option("اقتصادی / Economical","Economical");
				  document.formname.subcategory.options[6]=new Option("سیاسی / Political","Political");
				  document.formname.subcategory.options[7]=new Option("افغانستان / A-news","A-news");
			      document.formname.subcategory.options[8]=new Option("جهان / W-news","W-news");
				  document.formname.subcategory.options[9]=new Option("فرهنگ و هنر / Culture","Culture");
				  document.formname.subcategory.options[10]=new Option("دهکده ها / Villages","Villages");
                  break;
				  
			 case "Headlines" :
			       document.formname.subcategory.options[0]=new Option("سرخط / Headline","Headline");
				   document.formname.subcategory.options[1]=new Option("تحلیل / Analysis ","Analysis");
				   document.formname.subcategory.options[2]=new Option("دیدگاه / Lookout ","Lookout");
                  break;
				  
			 case "News" :
                  document.formname.subcategory.options[0]=new Option("خبر ها / News","News");
                  break;
				  
			case "Events" :
			       document.formname.subcategory.options[0]=new Option("رویدادها / Events","Events");
                  break;
              case "S-news" :
			      document.formname.subcategory.options[0]=new Option("گزارش ویژه / S-news","S-news");
                  break;
			  case "Articles" :
                  document.formname.subcategory.options[0]=new Option("اجتماعی / Social","Social");
				  document.formname.subcategory.options[1]=new Option("اقتصادی / Economical","Economical");
				  document.formname.subcategory.options[2]=new Option("سیاسی / Political","Political");
				  document.formname.subcategory.options[3]=new Option("فرهنگ و هنر / Culture","Culture");
				  document.formname.subcategory.options[4]=new Option("دهکده ها / Villages","Villages");
                  break;
			case "World" :
                  document.formname.subcategory.options[0]=new Option("افغانستان / A-news","A-news");
				  document.formname.subcategory.options[1]=new Option("جهان / W-news","W-news");
				  document.formname.subcategory.options[2]=new Option("در چنین روزی / wi-this-day","wi-this-day");
				  document.formname.subcategory.options[3]=new Option("تاریخ نگار / Historic","Historic");
                  break;  
			case "Others" :
			      document.formname.subcategory.options[0]=new Option("سخن بینر / Header","Header");
				  document.formname.subcategory.options[1]=new Option("در باره ما / About","About");
				  document.formname.subcategory.options[2]=new Option("صفحه عکسها/ Gallery","Gallery");
				  document.formname.subcategory.options[3]=new Option("صفحه کارتن ها / Cartoons","Cartoons");
				  
                  break; 
	      default:
				  document.formname.subcategory.options[0]=new Option("")
				  break;
		  }
		  return true;
		  }
		   </script>
     
     
      <?php
          require("dbcon.php");
          $id =$_REQUEST['id'];
          
          $result = mysql_query("SELECT * FROM farticles WHERE id = '$id'");
          $test = mysql_fetch_array($result);
          if (!$result) 
                  {
                  die("Error: Data not found..");
                  }	
		  $title=$test['title'] ;
		  $author=$test['author'] ;
		  $cate=$test['category'] ;
		  $subcate=$test['subcategory'] ;
		  $headline=$test['headline'] ;	
		  $content=$test['content'] ;
		  $datetime=$test['date'] ;
		  $jalali_date=$test['fdate'] ;
		  $jalali_date_s=$test['sdate'] ;	
		  $month_s=$test['month'] ;
		  $year=$test['year'] ;	
		  $status=$test['status'] ;					
		  
          
          if(isset($_POST['save']))
          {	
			  $title_save = $_POST['title'];
			  $author_save = $_POST['author'];
              $cate_save = $_POST['category'];
              $subcate_save = $_POST['subcategory'];
              $headline_save = $_POST['headline'];
			  $content_save = $_POST['content'];
              $datetime_save = $_POST['date'];
			  $jalali_date_save = $_POST['fdate'];
			  $jalali_date_s_save = $_POST['sdate'];
			  $month_save = $_POST['month'];
              $year_save = $_POST['year'];
			  $status_save = $_POST['status'];
              mysql_query("UPDATE farticles SET title ='$title_save', author ='$author_save', category ='$cate_save', subcategory ='$subcate_save', headline ='$headline_save', content ='$content_save',  date ='$datetime_save', fdate ='$jalali_date_save', sdate ='$jalali_date_s_save', month ='$month_save', year ='$year_save', status ='$status_save' WHERE id = '$id'")
              or die(mysql_error()); 
              echo'<div id="editsuccess" dir="rtl">
				<p>مطلب با موفقيت ویرایش گردید.</p>
				<a href="../admin/blog_add.php"><button id="close">بسته</button></a>
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
       
         <!--Strat_forms-->      
       <div align="left">
         <form method="post" enctype="multipart/form-data" id="formname" name="formname">
             <fieldset class="form">
              <legend align="right" dir="rtl">ویرایش پست</legend>
              <p id="img-note" dir="rtl" align="right"><span><b>(*) </b></span>پرکردن فرمهای با این نشان لازم است.</p>
                <div id="container"> 
                  <div class="short-des">
                    <p id="headline-txt"> شرح مختصر پست <span>&nbsp;</span></p>
                      <textarea name="headline" class="form-input" id="headline-edit"  maxlength="600" dir="rtl"><?php echo $headline ?></textarea>
                  </div>
                  <br><br>
                  <div class="blog-img-form"> <!--Blog Image and Form-->
                  <div dir="rtl" id="post-form"><!--Post Forms-->
                  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label  for="title">عنوان<span>*</span></label>
                  <input type="text" name="title" maxlength="120"  value="<?php echo $title ?>" class="form-input" dir="rtl" required/><br><br> 
                  
                  <label  for="author">نویسنده<span>*</span></label>
                  <input type="text" name="author" accept="text/plain"  value="<?php echo $author ?>" class="form-input" dir="rtl"/><br><br> 
                  
                  <label  for="sclass">کتگوری<span>*</span></label>
                  <select name="category" dir="rtl" id="category" onchange="dropdownlist(this.options[this.selectedIndex].value);" class="form-input" required>
                      <option value=""           id="option">انتخاب کتگوری</option>
                      <option value="HP-Slider"  id="option">سلایدر / HP-Slider</option>
                      <option value="Headlines"  id="option">سرخط ها / Headlines</option>
                      <option value="News"       id="option">خبر ها/ News</option>
                      <option value="Events"     id="option">رویدادها / Events</option>
                      <option value="S-news"     id="option">گزارش ویژه / S-news</option>
                      <option value="Articles"   id="option">مقاله ها / Articles</option>
                      <option value="World"      id="option">جهان / World</option>
                      <option value="Others"     id="option">بقیه / Others</option>
                  </select>
                  <p>
                  <label  for="subcategory">نوع</label> 
				  <script type="text/javascript" language="JavaScript">
                  document.write('<select name="subcategory" class="form-input" id="option"><option value="">انتخاب نوع</option></select>')
                  </script>
                  <noscript>
                  <select name="subcategory" id="subcategory"required dir="rtl">
                  <option value="">انتخاب نوع</option>
                  </select>
                  </noscript>
                  </p>
                  </div> <!--Post Forms-->
                  </div> <!--Blog Image and Form-->
                  <div id="blog-date">
                  <label  for="date">تاریخ انتشار</label>
                  <input type="text" name="date"  value="<?php echo $datetime=date("M d, Y"); //date time  ?>" id="blog-edit-date"  dir="rtl"/>&nbsp; 
                  <input type="text" name="fdate" value="<?php echo $jalali_date = jdate("l d p Y",$timestamp);  ?>"  id="blog-edit-fdate" dir="rtl"/>&nbsp; 
                  <input type="text" name="sdate" value="<?php echo $jalali_date_s = jdate("y/m/d",$timestamp);  ?>"  id="blog-edit-sdate" dir="rtl"/><br><br>
                  <div align="right">
                  <label  for="month">ماه انتشار</label>&nbsp;&nbsp;
                  <input type="text" name="month" value="<?php echo $month = jdate("p",$timestamp);  ?>" id="blog-edit-date"  dir="rtl"/>&nbsp; <br><br>
                  <label  for="year">سال انتشار</label>
                  <input type="text" name="year"  value="<?php echo $year = jdate("Y",$timestamp);  ?>" id="blog-edit-date"  dir="rtl"/>&nbsp; <br><br> <br><br>
                  </div>
                  </div>
                  <div class="break"></div><!--Break-->
                  <div align="center" id="editor">
                  <textarea name="content"  id="content"><?php echo $content ?></textarea>
                  </div>
                  <p align="right" dir="rtl"> 
                  وضعیت <span>*</span> 
                  &nbsp;&nbsp;&nbsp;&nbsp; 
                  <label>
                  <input type="radio" name="status" value="show" required id="status_0">
                         نمایش</label>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                  <label>
                  <input type="radio" name="status" value="hide" required id="status_1">
                         پنهان</label>
                   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                  <button name="save" value="post" id="button">ویرایش</button> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                  <input type="reset" name="reset" value="حالت اول" id="button" />&nbsp; &nbsp;
                  </p>
                </div>
            </fieldset>
        </form>
      </div>
      <!--end_forms--> 
      <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	  <script type="text/javascript">
          CKEDITOR_BASEPATH = 'ckeditor';
      
          var editor = CKEDITOR.replace('content', {
              filebrowserBrowseUrl: "../kcfinder/browse.php?type=files"
          });
      </script>
      
        
<!--Start_PHP_forms_table-->  
             
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