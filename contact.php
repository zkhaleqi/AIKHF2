<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->

<head>
<title>AIKHF | ارتباط با ما</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.codenavis.com/">
<meta http-equiv="pics-label" content="http://www.nahoorvice.com/images/nahoor-voice.png">
<meta name="publisher" content="http://www.nahoorvoice.com/">
<meta name="keywords" content="ناهور وایس، اخبار ناهور، ولسوالی ناهور، ولایت غزنی، ولسوالی ناهور افغانستان، ولسوالی ناور، ناور، اخبار ولسوالی ناهور، اخبار ولسوالی ناور، اخبار تازه، اخبار تازه افغانستان، اخبار داغ افغانستان و منطقه، مقالات اقتصادی، مقالات و اخبار فرهنگی، اخبار علمی، اخبار پژوهشی، اخبار ناور، nahoorvoice, صدای ناهور، nahoor voice, nohoorvoice afghanistan, nahoor voice ghazni">
<meta name="news_keywords" content="nahoor voice, ناهور وایس ، اخبار اجتماعی، اقتصادی، سیاسی، اخبار افغانستان و جهان">
<meta name="title" content="Nahoor Voice | ناهور وایس">
<meta name="description" content="سایت خبری: اجتماعی، اقتصادی، سیاسی مردم افغانستان، ناهور وایس با پوشش گسترده ویب سایت خبری مردم افغانستان به خصوص ولسوالی ناهور">
<meta name="author" content="Nahoor Voice">
<!--OGM-->
<meta property="og:title" content="ناهور وایس" />
<meta property="og:site_name" content="ناهور وایس"/>
<meta property="og:url" content="http://www.nahoorvoice.com/" />
<meta property="og:description" content="سایت خبری: اجتماعی، اقتصادی، تحلیلی، سیاسی مردم افغانستان، روزنامه وحدت با پوشش گسترده ویب سایت خبری مردم افغانستان"/>
<meta property="og:type" content="Website" />
<meta property="og:locale" content="fa_AF" />  
<meta property="article:author" content="nahoor voice" />
<meta property="article:publisher" content="https://www.facebook.com/nahoorvoice/"/>
<meta property="og:image" content="http://www.nahoorvoice.com/images/nahoor-voice.png">
 
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/style.css"> 
<link href="css/font-awesome.min.css" rel="stylesheet">

<!--<link href="css/main.css" rel="stylesheet" type="text/css">-->
<!--link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"-->
<link rel="icon" type="image/png" href="favicon.ico"/>
<script src="js/respond.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
</head>

<body>

<header id="header-place"><!--Start full width header-->
<div class="container_12 header"> <!--Start Head Container-->
    <!--Header-->
    <?php include 'include/header.php'; ?>
    <!--Header-->
    <nav id="nav-bar"><!--Navigation Bar-->
        <ul>
          <li class="first-page"><a href="index.php">صفحه نخست</a></li>
          <li><a href="reports.php">خبرها</a></li><!--
          Home, about, contact, news, images, 
          <li><a href="politics.php">سیاسی</a></li>
          <li><a href="society.php">اجتماعی</a></li>
          <li><a href="economic.php">اقتصادی</a></li>
          <li><a href="culture.php">فرهنگ/ هنر</a></li>
          <li><a href="villages.php">دهکده ها</a></li>-->
          <li><a href="villages.php">اعضا</a></li>
          <li><a href ='gallery.php'>عکس</a></li>
          <li><a href="video.php">ویدیو</a></li>
          <li><a href="about.php">در باره ما</a></li>
          <li class="selected" style="width:68px"><a href="contact.php">ارتباط با ما</a></li>
        </ul>
          <?php include 'include/search.php';?>
        </ul>
    </nav><!--End Navigation Bar-->
</div><!--End head container-->
</header><!--End full width header-->

<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->
  <section id="main">
    <div class="grid_4" id="side-bar"><!--Sidebar-->
      <?php include 'include/side-bar3.php';	?>
    </div > <!--End Side Bar-->
    <div class="grid_8">
      <div class="contact" id="content">
        <div class="contact-form">
        <h3>تماس با ما</h3>
        <hr class="side_break">
         <!--Strat_forms-->      
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
              <input type="text" name="name" class="form_input" required  id="txtname" maxlength="30" placeholder=" اسم (لازم)"/>
                 &nbsp; &nbsp;
              <input type="email" name="email"  class="form_input" required  id="txtemail" maxlength="50" placeholder=" ایمیل (لازم) و محفوظ می ماند."/>
                 <br><br>
              <input type="text" name="subject" class="form_input" id="txtsubject" maxlength="100" placeholder=" موضوع" accept="text/plain"/>
                 <br><br>
              <textarea  name="message" class="form_input" id="txtmessage" placeholder=" پیام (لازم)" required></textarea>
              <div id="file">  
                <input type="text" class="file" name="file" value="ضمیمه" title="حد اکثر 20MB"/>
                <div class="file_upload">
                <input type="file" id="file_upload" name="file"/>
                </div>
                <div id="btn">
                <input type="submit" name="submit" value="ارسال" id="button"/>
                <input type="reset" name="reset" value="پاک کردن فرم" id="button"/>
                </div>
              </div>
          </form>
          <?php
		  include 'dbcon.php';
		  error_reporting(0);
		  if(isset($_POST['submit']))
		  {
			  
		  $target = "files/inbox/";
		  $target = $target . basename( $_FILES['file']['name']);
		  
		  $file = ($_FILES['file']['name']);
		  $name = $_POST['name'];
		  $email = $_POST['email'];
		  $subject = $_POST['subject'];
		  $message = $_POST['message'];
		  $datetime=date("D, M d, Y | h:i:A"); //date time 
		  
		  $sql = mysql_query("INSERT INTO `fmail` (`name`, `email`, `subject`, `message`, `file`, `date` ) VALUES ('$name', '$email', '$subject', '$message', '$file', '$datetime');"); 
		  move_uploaded_file($_FILES['file']['tmp_name'], $target);
		 if(isset($_POST['submit']))
		  { 
		  ?>
		  <p id="success-msg" dir="rtl">
		   <img src="images/select.png" width="16" height="16"  alt=""/>
		   <b>پیام شما با موفقيت ارسال گردید.</b>
		   <a href="contact.php"><img src="images/delete.png" width="16" height="16"  alt=""/></a>
		  </p>
		  <?php 
		  }
		  else
		  {
		  ?>
		  <span dir="rtl">
		  <a href="contact.php"><img src="images/delete.png" width="16" height="16"  alt=""/></a>
		   متاسفانه پیام ارسال نگردید.
		   <img src="images/delete.png" width="16" height="16"  alt=""/>
		  </span>
		  <?php 
		  }
		  }
	       mysql_close();	
		  ?> 
        </div>
      </div>
    </div>
  </section>
  <!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>
