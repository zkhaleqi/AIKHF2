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
<title>مدیریت مطالب</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/admin_pages.css" />
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
                          
   <p align="center" class="cont_text" dir="rtl">اضافه کردن مطلب <br><span>با استفاده از فرم زیر مطلب جدید به دیتابیس سایت اضافه کنید. </span></p>

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
				  document.formname.subcategory.options[3]=new Option("صفحه کارتون ها / Cartoons","Cartoons");
				  
                  break; 
	      default:
				  document.formname.subcategory.options[0]=new Option("")
				  break;
		  }
		  return true;
		  }
		   </script>
         <!--Strat_forms-->      
       <div align="left">
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" id="formname" name="formname">
             <fieldset class="form">
              <legend align="right" dir="rtl">ایجاد پست جدید</legend>
              <p id="img-note" dir="rtl" align="right">پرکردن فرمهای با این نشان <span>*</span> لازم است.</p>
                <div id="container"> 
                  <div class="short-des">
                      <p id="headline-txt"> سرخط مطالب <span>*</span></p>
                      <textarea name="headline" class="form-input" id="headline" placeholder="این فیلد می تواند شامل سرخط گزارش و یا پاراگراف نخست همان مطلب باشد که به جز کتگوری (بقیه) دیگر در تمام صفحات استفاده می شود و حد اقل 50 کلمه برای سرخط  پست ها لازم است (گزارش ویژه و اخبار مربوط به افغانستان و جهان بیشتر نیاز  دارد) ." maxlength="560" dir="rtl" required></textarea>
                  </div>
                  <br><br>
                  <div class="blog-img-form"> <!--Blog Image and Form-->
                    <div id="upload_blog">
                      <div class="custom_file_upload">
                        <input type="text" class="file" dir="rtl" name="file" value="انتخاب تصویر عنوان" placeholder="">
                        <div class="file_upload">
                        <input type="file" id="file_upload" name="file" required/>
                        </div>
                      </div>
                    </div>
                  <div dir="rtl" id="post-form"><!--Post Forms-->
                  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label  for="title">عنوان<span>*</span></label>
                  <input type="text" name="title" title="در صورتی که لازم باشد برای عنوان از تک ناخنک ('') استفاده نکنید." maxlength="100" class="form-input" dir="rtl" required/><br><br> 
                  
                  <label  for="author">نویسنده</label>
                  <input type="text" name="author" class="form-input" dir="rtl"/><br><br> 
                  
                  <label  for="sclass">کتگوری<span>*</span></label>
                  <select name="category" dir="rtl" id="category" onchange="dropdownlist(this.options[this.selectedIndex].value);" class="form-input" required>
                      <option value=""           id="option">انتخاب کتگوری</option>
                      <option value="meetings"  id="option">جلسات </option>
                      <option value="ceremonies"  id="option">مراسم</option>
                      <option value="fateha"       id="option">فاتحه ها</option>
                  </select>
                  <p><!--
                  <label  for="subcategory">نوع</label> 
				  <script type="text/javascript" language="JavaScript">
                  document.write('<select name="subcategory" class="form-input" id="option"><option value="">انتخاب نوع</option></select>')
                  </script>
                  <noscript> 
                  <select name="subcategory" id="subcategory"required dir="rtl">
                  <option value="">انتخاب نوع</option>
                  </select>
                  </noscript>-->
                  </p>
                  </div> <!--Post Forms-->
                  </div> <!--Blog Image and Form-->
                  <div id="form-cont-text" align="right"> <!--Blog-form-cont-text-->
                  <p align="right" id="post_content_note" dir="rtl"><b>نکته:</b> برای اضافه کردن ویدیو در سایت، ابتدا فریم کد ویدیو را از سایت مربوطه 
                   <a href="https://youtube.com/" target="_blank">youtube</a> یا <a href="https://vimeo.com/" target="_blank">vimeo</a>  کپی کرده و بعد در ویرایشگر زیر با کلیک روی 
                  <span title="منبع در قسمت راست بالایی ویرایشگر وجود دارد.">منبع </span>، کد را در صفحه Past کنید و از همینجا <span>(منبع)</span> می توانید عرض و طول ویدیو را نظر به خواست خود تغییر دهید.</p>
                  </div><!--Blog-form-cont-text-->
                  
                  <div align="center" id="editor">
                  <textarea name="content" id="content"></textarea>
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
                  <button name="post" value="post" id="button">نشر کردن پست</button> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                  <input type="reset" name="reset" value="پاک کردن فرم" id="button" />&nbsp; &nbsp;
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
      <!-- This Part made me really nervous!-->
      <!-- Blog_Add Confirmation  -->   
        <section class="code">
   <?php
   include 'dbcon.php';
     error_reporting(-1);			  
	 $file = (isset($_POST['file']) ) ? $_POST['file'] : '';
      if($_POST){
      $allowedExts = array("gif", "jpeg", "jpg", "png");
      $temp = explode(".", $_FILES["file"]["name"]);
      $extension = end($temp);
      if ((($_FILES["file"]["type"] == "image/gif")
      || ($_FILES["file"]["type"] == "image/jpeg")
      || ($_FILES["file"]["type"] == "image/jpg")
      || ($_FILES["file"]["type"] == "image/jpeg")
      || ($_FILES["file"]["type"] == "image/ico")
	  || ($_FILES["file"]["type"] == "image/x-png")
      || ($_FILES["file"]["type"] == "image/png"))
      && ($_FILES["file"]["size"] < 25000000)
      && in_array($extension, $allowedExts))
        {
        if ($_FILES["file"]["error"] > 0 && $_FILES["file"]["name"]!=' ')
          {
          echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
          }
        else
          {
         // echo "Image Name: " . $_FILES["file"]["name"] . "<br>";
         // echo "Image Type: " . $_FILES["file"]["type"] . "<br>";
         // echo "Image Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
          $dir="../kcfinder/files/images";
          if (!is_dir($dir)) {
                  mkdir($dir);         
              }
         if (file_exists("../kcfinder/files/images/" . $_FILES["file"]["name"]))
            {
			?>
           <div id="duplicate" dir="rtl"> 
		   <?php echo   'تصویر عنوان با نام '. '(<i dir="ltr">' .$_FILES["file"]["name"] .'</i>)'.  ' از قبل وجود دارد. <br>
		   لطفن تصویر را تغییر نام داده و بعد اپلود کنید.' ; ?>
           <span>
		   <?php echo "<br>";
           echo "نوع تصویر: " . $_FILES["file"]["type"] . "<br>";
           echo "اندازه تصویر: " . ($_FILES["file"]["size"] / 1024) . " کیلوبایت<br>";
           echo "مکان تصویر: " . "kcfinder/files/" . $_FILES["file"]["name"];
           ?></span>
           <br><a href="../admin/blog_add.php" id="close"><button id="close">بسته</button></a>
           </div>
           <?php
			}
         else
            {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "../kcfinder/files/images/" . $_FILES["file"]["name"]);
            //echo "Address: " . "/upload/" . $_FILES["file"]["name"];
            echo"</br>";thumbs("../kcfinder/files/images");
			  }
			}
		  }
		else
		  {
		   ?>
         </div>
		 <div id="invalid" dir="rtl">
		 <p>فایل اشتباه!</p>
         <span dir="rtl">لطفن تصویری با پسوند  <i dir="ltr">(.jpg .jpeg .gif .png)</i> انتخاب کنید.</span>
         <br><a href="../admin/blog_add.php" id="close"><button id="close">بسته</button></a>
         </div>
          <?php
		  }
		 } 
		?> 
        <?php
      
      ?>
	 <?php
          /**Function to create thumbnails*/
          function thumbs($orig_directory){
          //Full path to image folder /* change this path */
          $thumb_directory =  $orig_directory;    //Thumbnail folder
          /* Opening the thumbnail directory and looping through all the thumbs: */
          $dir_handle = @opendir($orig_directory); //Open Full image dirrectory
          if ($dir_handle > 1){ //Check to make sure the folder opened
         
          $allowed_types=array('jpg','jpeg','gif','png');
          $file_parts=array();
          $ext='';
          $title='';
          $i=0;
      
      
         while ($file = @readdir($dir_handle))
         {
      
          /* Skipping the system files: */
          if($file=='.' || $file == '..') continue;
      
          $file_parts = explode('.',$file);    //This gets the file name of the images
          $ext = strtolower(array_pop($file_parts));
      
          /* Using the file name (withouth the extension) as a image title: */
          $title = implode('.',$file_parts);
          $title = htmlspecialchars($title);
      
          /* If the file extension is allowed: */
          if(in_array($ext,$allowed_types))
          {

        /* Inputing images into a database, mysql query here */

       // Using Persian Calender here
        $timezone = 0;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
		$now = date("y-m-d", time()+$timezone);
		$time = date("H:i:s", time()+$timezone);
		list($year, $month, $day) = explode('-', $now);
		list($hour, $minute, $second) = explode(':', $time);
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		include ('jdf.php');
		// Using Persian Calender here
        include 'dbcon.php';
//		error_reporting(E_ALL ^ E_NOTICE);
		error_reporting(-1);
		if(isset($_POST['post']))
		{
		
		$file = ($_FILES['file']['name']);
		$datetime=date("M d, Y"); //date time
		$jalali_date = jdate("l d p Y",$timestamp);
        $jalali_date_s = jdate("y/m/d",$timestamp);
		$month = jdate("p",$timestamp);
		$year = jdate("Y",$timestamp); 
        if(!empty($_POST['post'])){
        mysql_query("INSERT INTO farticles ( title, author, category, subcategory, thumb, headline, content, date,            		                     fdate, sdate, month, year, status) 
	 				VALUES( '$_POST[title]', '$_POST[author]', '$_POST[category]', '$_POST[category]', '$file',       
					'$_POST[headline]', '$_POST[content]', '$datetime', '$jalali_date', '$jalali_date_s','$month',        
					'$year', '$_POST[status]')");		   
        }
         
        /* The code past here is the code at the start of the tutorial */
        /* Outputting each image: */

        $nw = 220;
        $nh = 150;
        $source = "{$orig_directory}/{$file}";
        $stype = explode(".", $source);
        $stype = $stype[count($stype)-1];
        $dir="{$thumb_directory}/thumbs";
        if (!is_dir($dir)) {
                mkdir($dir);        
        }
        $dest = "{$thumb_directory}/thumbs/{$file}";

        $size = getimagesize($source);
        $w = $size[0];
        $h = $size[1];

        switch($stype) {
            case 'gif':
                $simg = imagecreatefromgif($source);
                break;
            case 'jpg':
                $simg = imagecreatefromjpeg($source);
                break;
            case 'png':
                $simg = imagecreatefrompng($source);
                break;
        }

        $dimg = imagecreatetruecolor($nw, $nh);
        $wm = $w/$nw;
        $hm = $h/$nh;
        $h_height = $nh/2;
        $w_height = $nw/2;

        if($w> $h) {
            $adjusted_width = $w / $hm;
            $half_width = $adjusted_width / 2;
            $int_width = $half_width - $w_height;
            imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
        } elseif(($w <$h) || ($w == $h)) {
            $adjusted_height = $h / $wm;
            $half_height = $adjusted_height / 2;
            $int_height = $half_height - $h_height;

            imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
        } else {
            imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
        }
            imagejpeg($dimg,$dest,80);
        }
		}
		?>
        
        <div id="success"  dir="rtl">
		<?php echo 'مطلب با تصویر عنوان با موفقيت اضافه گردید.' . "<br>";?>
        <span>
		<?php
		 echo "اسم تصویر: " . $_FILES["file"]["name"] . "<br>";
         echo "نوع تصویر: " . $_FILES["file"]["type"] . "<br>";
         echo "اندازه تصویر: " . ($_FILES["file"]["size"] / 1024) . " کیلوبایت<br>";
		 echo "مکان تصویر: " . "kcfinder/files/" . $_FILES["file"]["name"];?>
         </span>
         <br><a href="../admin/blog_add.php" id="close"><button id="close">بسته</button></a>
         <?php
		/* Closing the directory */
		@closedir($dir_handle);
		}
		}
		}
		?></span>
        </div>
     </section>    
        
<!--Start_PHP_forms_table-->  
	  <?php
          include 'dbcon.php';
          error_reporting(-1);
		  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
          $start_from = ($page-1) * 10; 
          $select = mysql_query("SELECT * FROM farticles ORDER BY id DESC LIMIT $start_from, 10");
          if(isset($_POST['submit']))
          {
            for($i=1;$i<=$_POST['hidden'];$i++)
            {
              $query2 = mysql_query("SELECT thumb from farticles WHERE id = ' ".$_POST["hioddenid$i"]." ' ");
              while($file = mysql_fetch_array($query2))
              {
                $unlink = unlink('../kcfinder/files/images/'.$file['thumb']) &&  $unlink = unlink('../kcfinder/files/images/thumbs/'.$file['thumb']);
                if($unlink)
                  {
                  $query1 = mysql_query("DELETE from farticles WHERE id = ' ".$_POST["hioddenid$i"]." ' ");	
				  echo'<div id="delsuccess" dir="rtl">
				      <p>مطلب با موفقيت حذف گردید.</p>
				     <a href="../admin/blog_add.php"><button id="close">بسته</button></a>
			        </div>';
			        } 
				   else
				    {
					echo'<div id="error" dir="rtl">
				      <p>مشکلی در حذف تصویر عنوان وجود دارد!</p>
					  <p>مشکلات ممکن:</p>
					  <span>&loz; تصویر قبلن حذف گردیده است.</span><br>
					  <span>&loz; اسم تصویر تغییر کرده است.</span><br>
					  <span>&loz; تصویر به مکان دیگری جابجا شده است.</span><hr size="1" color="#333">
					  <span>برای پاک کردن این مطلب از <i>(حذف)</i> ساده استفاده کنید.</span><br>
				      <a href="../admin/blog_add.php"><button id="close">بسته</button></a>
			        </div>';
				  }
				}
			  }
			}
		?>
      </div>

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <table id="sql_table" cellpadding="5" dir="rtl">
              <tr class="sql_ctable-th">
             <!--     <th class="bordert" id="borderr">انتخاب</th>-->
                  <th class="bordert">شماره</th>
                  <th class="bordert">تصویر عنوان</th>
                  <th class="bordert">عنوان</th>
                  <th class="bordert">نویسنده</th>
                  <th class="bordert">کتگوری</th>
                  <th class="bordert">نوع</th>
                  <th class="bordert">تاریخ انتشار</th>
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
                  
           <!--       <td id="select" class="borderr"><input type="checkbox" name="hioddenid<?php /* echo $i; */ ?>" value="<?php /* echo $row['id']; */ ?>" /></td> -->
                  <td id="id"><?php echo $row['id']; ?></td>
                  <td id="image" width="100"><img src="../kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>"  onerror="this.style.display='none'" width="100"/></td>
                  <td id="title"><?php echo $row['title']; ?></td>
                  <td id="title"><?php echo $row['author']; ?></td>
                  <td id="name"><?php echo $row['category']; ?></td>
                  <td id="name"><?php echo $row['subcategory']; ?></td>
                  <td id="name"><?php echo $row['fdate']; ?></td>
                  <td id="name"><?php echo $row['status']; ?></td>  
              <!--    <td id="update" width="20"><?php /* echo"<a href ='blog_edit.php?id=$id'><input type='button' id='del-n-edit'  value='ویرایش'></a>"; */ ?></td> -->
                  <td id="delete" class="borderl" width="15"> <?php echo"<a href ='blog_del.php?id=$id'><input type='button' id='del-n-edit'  value='حذف'  title='Deletes data from database'></a>";?></td>
                  
                  <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['thumb'];?>" />
              </tr>
                  <?php } ?>
              <tr class="ctable">
                  <input type="hidden" name="hidden" value="<?php echo $i; ?>" />
<!--                  <td colspan="11" align="center" id="delete" class="delete">
                  <input type="submit" name="submit" value="حذف کلی" id="button" id="button" title="Deletes data from database and files from server" />  
                  </td> -->
              </tr>
          </table>
       </form>
       <!--End_PHP_forms_table-->
       <!--Page Numbeers-->
	   <?php include 'pagination/blog-page.php';	?>
       <!--Page Numbeers-->             
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