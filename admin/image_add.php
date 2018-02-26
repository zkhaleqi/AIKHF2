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
<title>مدیریت تصاویر</title>
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
                       
    <p align="center" class="cont_text" dir="rtl">اضافه کردن کارتن <br><span>با استفاده از فرم زیر مطلب جدید به دیتابیس سایت اضافه کنید. </span></p>
    

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
				  document.formname.subcategory.options[2]=new Option("10 برتر/ Top-10","Top-10");
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
         <!--Strat_forms-->      
       <div align="left">
         <form  action="<?php $_SERVER['PHP_SELF'] ?>"method="post" enctype="multipart/form-data" id="formname" name="formname">
             <fieldset class="form">
                <legend align="right" dir="rtl">اضافه کردن تصویر جدید</legend>
                <p id="img-note" dir="rtl" align="right">پرکردن فرمهای با این نشان <span>*</span> لازم است.</p>
                <div class="cartoon">
                  <!--p id="img-details" align="right">
                  <label  for="details">شرح تصویر <span>(این شرح شامل بیوگرافی، پروفایل و توضیحات کلاسها نیز می شود.)</span></label>
                  <textarea name="details" class="form-input" id="details-txt" dir="rtl" placeholder=" حد اکثر 1500 کلمه" maxlength="1500"></textarea>
                  </p-->
                  <br><br><br>
                  <div class="custom_file_upload">
                      <input type="text" class="file" name="file" value="* انتخاب تصویر " dir="rtl" placeholder="" required>
                      <div class="file_upload">
                      <input type="file" id="file_upload" name="file" required>
                      </div>
                  </div>
                  
                  <div id="img-forms"> <!--img-forms-->
                  <br> 
                 <label  for="name">عنوان</label>
                 <input type="text" name="name" dir="rtl" class="form-input"><br><br>
                 <label  for="artist">نویسنده</label>&nbsp;&nbsp;
                 <input type="text" name="artist" dir="rtl" class="form-input" /><br><br>
                 <!--label  for="category">کتگوری<span>*</span></label>&nbsp; 
                 <select name="category" dir="rtl" id="category" onchange="dropdownlist(this.options[this.selectedIndex].value);" class="form-input" required>
                      <option value=""            id="option">انتخاب کتگوری</option>
                      <option value="Art-works"   id="option">نقاشی/ Art-works</option>
                      <option value="Exhibition"  id="option">نمایشگاه/ Exhibition</option>
                      <option value="Class"       id="option">کلاس/ Class</option>
                      <option value="Staffs"      id="option">پرسنل/ Staff</option>
                      <option value="Life-sketch" id="option">لایف اسکیچ/ Life Sketch</option>
                      <option value="Teachers"    id="option">استادان/ Teachers</option>
                      <<option value="Students"   id="option">شاگردان/ Students</option>
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
                  </div><!--img-forms-->
                  </div>
                  <br><br>
                  <div id="img-btn" align="right">
                  وضعیت <span>*</span>&nbsp;&nbsp; 
                  <label for="status">
                  <input type="radio" name="status" value="show" id="status_0" required/>نمایش</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <label for="status">
                  <input type="radio" name="status" value="hide" id="status_0" required/>پنهان</label>
                  <br><br>
                  <input type="reset" name="reset" value="پاک کردن فرم" id="button" />
                  <br>
                  <input type="submit" name="submit" value="اضافه کردن تصویر" id="button" />&nbsp;
                  </div>
            </fieldset>
        </form>
      </div>
      <!--end_forms-->
        	
  <!--Image-add confrimations here-->   
   <section class="code">
   <?php
     error_reporting(0);			  
	 $file = (isset($_POST['file']) ) ? $_POST['file'] : '';
      if($_POST){
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
          $dir="../images/cartoons";
          if (!is_dir($dir)) {
                  mkdir($dir);         
              }
         if (file_exists("../images/cartoons/" . $_FILES["file"]["name"]))
            {
			?>
           <div id="duplicate" dir="rtl"> 
		   <?php echo   'تصویر عنوان با نام '. '(<i dir="ltr">' .$_FILES["file"]["name"] .'</i>)'.  ' از قبل وجود دارد. <br>
		   لطفن تصویر را تغییر نام داده و بعد اپلود کنید.' ; ?>
           <span>
		   <?php echo "<br>";
           echo "نوع تصویر: " . $_FILES["file"]["type"] . "<br>";
           echo "اندازه تصویر: " . ($_FILES["file"]["size"] / 1024) . " کیلوبایت<br>";
           echo "مکان تصویر: " . "images/cartoons/" . $_FILES["file"]["name"];
           ?></span>
           <br><a href="../admin/image_add.php" id="close"><button id="close">بسته</button></a>
           </div>
           <?php
			}
         else
            {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "../images/cartoons/" . $_FILES["file"]["name"]);
            //echo "Address: " . "/upload/" . $_FILES["file"]["name"];
            echo"</br>";thumbs("../images/cartoons");
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
         <br><a href="../admin/image_add.php" id="close"><button id="close">بسته</button></a>
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


        // Using Persian Calender here
        $timezone = 12600;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
		$now = date("D M Y", time()+$timezone);
		$time = date("H:i:s", time()+$timezone);
		list($year, $month, $day) = explode('-', $now);
		list($hour, $minute, $second) = explode(':', $time);
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		include ('jdf.php');
		// Using Persian Calender here

        /* Inputing images into a database, mysql query here */

		include 'dbcon.php';
		error_reporting(E_ALL ^ E_NOTICE);
		if(isset($_POST['submit']))
		{

		$file = ($_FILES['file']['name']);
		$name = $_POST['name'];
		//$category = $_POST['category'];
		//$subcate = $_POST['subcategory'];
		$artist = $_POST['artist'];
		$status = $_POST['status'];
		//$details = $_POST['details'];
		$jalali_date = jdate("l، d p Y",$timestamp);
		$sql = mysql_query ("INSERT INTO `fimages` (`picture`, `name`, `artist`, `date`, `status`) VALUES ('$file',  '$name', '$artist', '$jalali_date', '$status');");
        /* cortoonized: `category`, `subcate`, `name`, `artist`, `details`, // '$category', '$subcate', '$name', '$artist', '$details',
        /* The code past here is the code at the start of the tutorial */
        /* Outputting each image: */

        $nw = 100;
        $nh = 67;
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
		<?php echo 'تصویر با موفقيت اضافه گردید.' . "<br>";?>
        <span>
		<?php
		 echo "اسم تصویر: " . $_FILES["file"]["name"] . "<br>";
         echo "نوع تصویر: " . $_FILES["file"]["type"] . "<br>";
         echo "اندازه تصویر: " . ($_FILES["file"]["size"] / 1024) . " کیلوبایت<br>";
		 echo "مکان تصویر: " . "images/cartoons/" . $_FILES["file"]["name"];?>
         </span>
         <br><a href="../admin/image_add.php" id="close"><button id="close">بسته</button></a>
         <?php
		/* Closing the directory */
		@closedir($dir_handle);
		}
		}
		}
		?></span>
        </div>
     </section>   
      <!--Add_POST_verifications finished here-->
  
      <!--Start_PHP_forms_table-->  
	  <?php
		 include 'dbcon.php';
          error_reporting(0);
          if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
          $start_from = ($page-1) * 10; 
          $select = mysql_query("SELECT * FROM fimages ORDER BY id DESC LIMIT $start_from, 10");
          if(isset($_POST['submit']))
          {
            for($i=1;$i<=$_POST['hidden'];$i++)
            {
              $query2 = mysql_query("SELECT picture from fimages WHERE id = ' ".$_POST["hioddenid$i"]." ' ");
              while($file = mysql_fetch_array($query2))
              {
                $unlink = unlink('../images/cartoons/'.$file['picture']) &&  $unlink = unlink('../images/cartoons/thumbs/'.$file['picture']);
                if($unlink)
                  {
                  $query1 = mysql_query("DELETE from fimages WHERE id = ' ".$_POST["hioddenid$i"]." ' ");	
                 echo'<div id="delsuccess" dir="rtl">
				      <p>تصویر با موفقيت حذف گردید.</p>
				     <a href="../admin/image_add.php"><button id="close">بسته</button></a>
			        </div>';
			        } 
				   else
				    {
					echo'<div id="error"  dir="rtl">
				      <p>مشکلی در حذف تصویر وجود دارد!</p>
					  <p>مشکلات ممکن:</p>
					  <span>&loz; تصویر قبلن حذف گردیده است.</span><br>
					  <span>&loz; اسم تصویر تغییر کرده است.</span><br>
					  <span>&loz; تصویر به مکان دیگری جابجا شده است.</span><hr size="1" color="#333">
					  <span>برای پاک کردن این مطلب از <i>(حذف)</i> ساده استفاده کنید.</span><br>
				      <a href="../admin/image_add.php"><button id="close">بسته</button></a>
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
                  <th class="bordert" id="borderr">انتخاب</th>
                  <th class="bordert">شماره</th>
                  <th class="bordert">تصویر</th>
                  <th class="bordert">عنوان</th>
                  <th class="bordert">نویسنده</th>
                  <!--th class="bordert">کتگوری</th>
                  <th class="bordert">نوع</th-->
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
                  <td id="image" width="80"><img src="../images/cartoons/thumbs/<?php echo $row['picture'];?>" onerror="this.style.display='none'" height="50" width="80"/></td>
                  <td id="name"><?php echo $row['name']; ?></td>
                  <td id="name"><?php echo $row['artist']; ?></td>
                  <!--td id="name"><?php //echo $row['category']; ?></td>
                  <td id="name"><?php //echo $row['subcate']; ?></td-->
                  <td id="date"><?php echo $row['date']; ?></td>
                  <td id="name"><?php echo $row['status']; ?></td>
                  <td id="update" width="20"> <?php echo"<a href ='image_edit.php?id=$id'><input type='button'  id='del-n-edit' value='ویرایش'></a>";?></td>
                  <td id="delete" class="borderl" width="15"> <?php echo"<a href ='image_del.php?id=$id'><input type='button'  id='del-n-edit' value='حذف' title='Deletes data from database'></a>";?></td>
                  
                  <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['picture'];?>" />
              </tr>
                  <?php } ?>
              <tr class="ctable">
                  <input type="hidden" name="hidden" value="<?php echo $i; ?>" />
                  <td colspan="9" align="center" id="delete" class="delete">
                  <input type="submit" name="submit" value="حذف کلی" id="button" title="Deletes data from database and files from server" />
                  </td> 
              </tr>
          </table>
      </form>
       <!--End_PHP_forms_table--> 
       <!--Page Numbeers-->
	   <?php include 'pagination/image-page.php';?>
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