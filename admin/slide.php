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
<title>مدیریت گالری عکس</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/admin_pages.css" />
<link rel="stylesheet" href="pagination/css/pagination.css" type="text/css">
<link rel="icon" type="image/png" href="favicon.ico"/>
</head><link rel="icon" type="image/ico" href="favicon.ico"/>
<link rel="shortcut icon" href="favicon.png"/>
<link rel="icon" type="image/png" href="favicon.ico"/>
<!-- The Body Starts Here -->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- table Body -->
<table class="Table_01" width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--Start_Content-->
  <tr>
    <td align="center" width="1024" class="content"><!-- table header -->
      
      <div class="header">
        <style>
.slide{color: #2d89a3;} 
</style>
        <!--/* Start_Top_Title_bar */  -->
        <div class="table-header">
          <h2>مدیریت ویب سایت</h2>
        </div>
        <!--/* End_Top_Title_bar */--> 
      </div>
      
      <!--Start_Admin/Clease/Teacher/Students-->
      
      <?php include 'sec-nav.php'; ?>
      
      <!--End_Admin/Clease/Teacher/Students-->
      
      <p align="center" class="cont_text" dir="rtl">اضافه کردن تصویر به گالری عکس<br>
        <span>با استفاده از فرم زیر مطلب جدید به دیتابیس سایت اضافه کنید. </span> </p>
      
      <!--Strat_forms-->
      
      <div align="left">
        <form  action="<?php $_SERVER['PHP_SELF'] ?>"method="post" enctype="multipart/form-data" >
          <fieldset class="form">
            <legend dir="rtl" align="right">اضافه کردن تصویر به گالری</legend>
            <p id="note" dir="rtl" align="right"><span><b>توجه! </b></span> <br>
              * برای مطابقت تصویر با سایز سلاید و نمایش بهتر، بهتر است بعد تصویر به تناسب <span><a href="http://en.wikipedia.org/wiki/Aspect_ratio" target="_blank">16x9</a></span> و یا <span>920x434</span> پیکسل باشد و تصاویر بزرگتر نیز به همن نسبت. <br>
              * گالری عکس تصاویر را بر اساس آلبوم در ویسایت نمایش میدهد. لذا لازم  است که در انتخاب نام آلبوم (فاصله بین کلمات) دقت داشته باشید. <br>
              * وقتی آلبوم جدید ایجاد می کنید اولین تصویر، تصویر پوش آلبوم در گالری عکس می باشد و آخرین تصویر هم در صفحه نخست مشاهده می شود. <br>
              * هر آلبوم دارای شرح و نویسنده می باشد که در دفعه نخست ایجاد آلبوم باید فرمش را پر کنید و بعد با عکسهایی که در همان البوم می اندازید لازم نیست دوباره فرمهای شرح آلبوم و نویسنده  را تکمیل کنید. </p>
            <div id="name-and-pic" align="right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label for="required">&nbsp;</label>
              <br>
              <br>
              <div class="slide_upload">
                <input type="text" class="slide" name="file" dir="rtl" value="انتخاب تصویر" placeholder=""equired/>
                <div class="file_upload">
                  <input type="file" id="file_upload" name="file" required/>
                </div>
              </div>
              <div id="slide-author"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="author"  class="form-input" dir="rtl" maxlength="100"/>
                &nbsp;
                <label  for="author"> نویسنده </span></label>
              </div>
              <br>
              &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="name"  class="form-input" dir="rtl" maxlength="100" required>
              &nbsp;
              <label  for="sname"> آلبوم </span></label>
            </div>
            <br>
            <p id="slide-details" align="right">
              <label  for="imgdetails" dir="rtl"> شرح تصویر</label>
              <textarea name="imgdetails" class="form-input" id="slide-details-txt" placeholder="توضیحات تصویر حداکثر 200 کلمه" maxlength="500"></textarea>
            </p>
            <p id="slide-album-details" align="right">
              <label  for="details" dir="rtl"> شرح البوم</label>
              <textarea name="details" class="form-input" id="slide-details-txt"></textarea>
            </p>
            <div id="reset-n-add" align="right"> <br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="reset" name="reset" value="پاک کردن فرم" id="slide-button" />
              &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" name="submit" value="اضافه کردن تصویر" id="slide-button" />
            </div>
          </fieldset>
        </form>
      </div>
      
      <!--end_forms--> 
      
      <!--Image-add confrimations here-->
      
      <section class="code">
        <?php				  
	 $file = (isset($_POST['file']) ) ? $_POST['file'] : '';
	 error_reporting(0);
      if($_POST)
	  {
      $allowedExts = array("gif", "jpeg", "jpg", "png");
      $temp = explode(".", $_FILES["file"]["name"]);
      $extension = end($temp);
      if ((($_FILES["file"]["type"] == "image/gif")
      || ($_FILES["file"]["type"] == "image/jpeg")
      || ($_FILES["file"]["type"] == "image/jpg")
      || ($_FILES["file"]["type"] == "image/pjpeg")
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
          $dir="../images/gallery";
          if (!is_dir($dir)) 
		  	{
            	mkdir($dir);         
            }
         if (file_exists("../images/gallery/" . $_FILES["file"]["name"]))
            {
			?>
        <div id="duplicate" dir="rtl"> <?php echo   'تصویر عنوان با نام '. '(<i dir="ltr">' .$_FILES["file"]["name"] .'</i>)'.  ' از قبل وجود دارد. <br>
		   لطفن تصویر را تغییر نام داده و بعد اپلود کنید.' ; ?> <span> <?php echo "<br>";
           echo "نوع تصویر: " . $_FILES["file"]["type"] . "<br>";
           echo "اندازه تصویر: " . ($_FILES["file"]["size"] / 1024) . " کیلوبایت<br>";
           echo "مکان: " . "images/gallery/" . $_FILES["file"]["name"];
           ?></span> <br>
          <a href="../admin/slide.php" id="close">
          <button id="close">بسته</button>
          </a> </div>
        <?php
			}
         else
            {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "../images/gallery/" . $_FILES["file"]["name"]);
            //echo "Address: " . "/upload/" . $_FILES["file"]["name"];
            echo"</br>";thumbs("../images/gallery");
			}
		  }
	    }
		else
		{
		?>
        </div>
        <div id="invalid" dir="rtl">
          <p>فایل اشتباه!</p>
          <span>لطفن تصویری با پسوند <i dir="ltr">(.jpg .jpeg .gif .png)</i> انتخاب کنید.</span> <br>
          <a href="../admin/slide.php" id="close">
          <button id="close">بسته</button>
          </a> </div>
        <?php
		}
	  } 
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


        // Using Persian Calender here
        $timezone = 0;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید

		$now = date("Y-m-d", time()+$timezone);
		$time = date("H:i:s", time()+$timezone);
		list($year, $month, $day) = explode('-', $now);
		list($hour, $minute, $second) = explode(':', $time);
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		include ('jdf.php');
		// Using Persian Calender here

        /* Inputing images into a database, mysql query here */

		include 'dbcon.php';
		error_reporting(E_ALL ^ E_NOTICE);
/*		error_reoprting(-1); */
		if(isset($_POST['submit']))
		{
		include 'dbcon.php';
		$file = ($_FILES['file']['name']);
		$author = $_POST['author'];
		$album = $_POST['name'];
		$imgdetails = $_POST['imgdetails'];
		$details = $_POST['details'];
		$datetime=date("M d, Y"); //date time 
		$jalali_date = jdate("l d p Y",$timestamp);
		$query = "INSERT INTO `fslide` (`picture`,`author`,  `album`, `imgdetails`, `details`, `date`, `fdate`, `hits`) 
		                                   VALUES ('$file', '$author', '$album', '$imgdetails', '$details', '$datetime', '$jalali_date', 0);";
		$sql = mysql_query ($query);

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
        <div id="success" dir="rtl"> <?php echo 'تصویر با موفقيت اضافه گردید.' . "<br>";?>  <span dir="rtl">
          <?php
		 echo "اسم تصویر: " . $_FILES["file"]["name"] . "<br>";
         echo "نوع تصویر: " . $_FILES["file"]["type"] . "<br>";
         echo "اندازه تصویر: " . ($_FILES["file"]["size"] / 1024) . " کیلوبایت<br>";
		 echo "مکان تصویر: " . "images/gallery/" . $_FILES["file"]["name"];?>
          </span> <br>
          <a href="../admin/slide.php" id="close">
          <button id="close">بسته</button>
          </a>
          <?php
		/* Closing the directory */
		@closedir($dir_handle);
		}
		}
		}
		?>
          </span> </div>
      </section>
      
      <!--Add_POST_verifications finished here-->
      
      <?php
          include 'dbcon.php';
          error_reporting(0);
          if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
          $start_from = ($page-1) * 10; 
          $select = mysql_query("SELECT * from fslide ORDER BY id DESC LIMIT $start_from, 10");
          if(isset($_POST['submit']))
          {
            for($i=1;$i<=$_POST['hidden'];$i++)
            {
              $query2 = mysql_query("SELECT picture from fslide WHERE id = ' ".$_POST["hioddenid$i"]." ' ");
              while($file = mysql_fetch_array($query2))
              {
                $unlink = unlink('../images/gallery/'.$file['picture']) &&  $unlink = unlink('../images/gallery/thumbs/'.$file['picture']);
                if($unlink)
                  {
                  $query1 = mysql_query("DELETE from fslide WHERE id = ' ".$_POST["hioddenid$i"]." ' ");	
                 echo'<div id="delsuccess" dir="rtl">
				      <p>تصویر با موفقيت حذف گردید.</p>
				     <a href="../admin/slide.php"><button id="close">بسته</button></a>
			        </div>';
			        } 
				   else
				    {
					echo'<div id="error" dir="rtl">
				      <p>مشکلی در حذف تصویر وجود دارد!</p>
					  <p>مشکلات ممکن:</p>
					  <span>&loz; تصویر قبلن حذف گردیده است.</span><br>
					  <span>&loz; اسم تصویر تغییر کرده است.</span><br>
					  <span>&loz; تصویر به مکان دیگری جابجا شده است.</span><hr size="1" color="#333">
					  <span>برای پاک کردن این مطلب از <i>(حذف)</i> ساده استفاده کنید.</span><br>
					  <i><span></span</i><br>
				      <a href="../admin/slide.php"><button id="close">بسته</button></a>
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
          <!--  <th class="bordert" id="borderr">انتخاب</th> -->
            <th class="bordert">شماره</th>
            <th class="bordert">تصویر</th>
            <th class="bordert" align="right">آلبوم</th>
            <th class="bordert" align="right">توضیحات تصویر</th>
            <th class="bordert" id="borderl" colspan="2">عملیات</th>
          </tr>
          <?php
					  $i = 0;
					  while($row = mysql_fetch_array($select))
					  {
					  $i = $i + 1;
                  ?>
          <?php $id = $row['id'] ?>
<!--          <tr class="sql_ctable-td">
            <td id="select" class="borderr"><input type="checkbox" name="hioddenid<?php /* echo $i; ?>" value="<?php echo $row['id']; */ ?>" /></td>  -->
            <td id="id"><?php echo $row['id']; ?></td>
            <td id="image" width="87"><img src="../images/gallery/thumbs/<?php echo $row['picture'];?>" onerror="this.style.display='none'" height="48" width="87"/></td>
            <td id="sl-name"><?php echo $row['album']; ?></td>
            <td id="des"><?php echo $row['details']; ?></td>
          <!--  <td id="update" width="20"><?php echo"<a href ='slide_edit.php?id=$id'><input type='button' id='del-n-edit' value='ویرایش'></a>";?></td>-->
            <td id="delete" class="borderl" width="15"><?php echo"<a href ='slide_del.php?id=$id'><input type='button' id='del-n-edit' value='حذف' title='Deletes data from database'></a>";?></td>
            <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['picture'];?>" />
          </tr>
          <?php 
                  };
              ?>
<!--          <tr class="ctable">
            <input type="hidden" name="hidden" value="<?php echo $i; ?>" />
            <td colspan="7" align="center" id="delete" class="delete"><input type="submit" name="submit" id="button" value="حذف کلی" title="Deletes data from database and files from server" />-->
              
              <!--Page Numbeers-->
              
              <?php include 'pagination/slide-page.php';	?>
              
              <!--Page Numbeers--></td>
          </tr>
        </table>
      </form>
      
      <!--End_PHP_forms_table--></td>
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