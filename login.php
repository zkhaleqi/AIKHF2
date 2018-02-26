<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->

<head>
<title>Admin Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.codenavis.com/">
<meta http-equiv="pics-label" content="http://www.nahoorvoice.com/images/nahoor-voice.png">
<meta name="publisher" content="http://www.nohoorvoice.com/">
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
		<?php  
		  include 'dbcon.php';
		  error_reporting(0);
		  $sql = "SELECT * FROM fslide ORDER BY id DESC LIMIT 0,1";
		  $rs_result = mysql_query ($sql, $con); 
		  while ($row = mysql_fetch_assoc($rs_result)) { 
		  ?>
		<?php $album = $row['album'] ?>
        <ul>
          <li class=" selected first-page"><a href="index.php">صفحه نخست</a></li>
          <li><a href="reports.php">خبرها</a></li><!--
          Home, about, contact, news, images, 
          <li><a href="politics.php">سیاسی</a></li>
          <li><a href="society.php">اجتماعی</a></li>
          <li><a href="economic.php">اقتصادی</a></li>
          <li><a href="culture.php">فرهنگ/ هنر</a></li>
          <li><a href="villages.php">دهکده ها</a></li>-->
          <li><a href="villages.php">اعضا</a></li>
          <li><?php echo"<a href ='gallery.php?album=$album'>";?>عکس<?php echo '</a>';?></li>
          <li><a href="about.php">در باره ما</a></li>
          <li style="width:68px"><a href="contact.php">ارتباط با ما</a></li>
        </ul>
    </nav><!--End Navigation Bar-->
    <?php }; ?>
</div><!--End head container-->
</header><!--End full width header-->

<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->
  <section id="main">
    <div class="grid_12">
      <div class="contact" id="content">
        <!-- Admin Login Section -->
        <div id="login" align="center" >
            <form action="loginverify.php" method="post">
             <fieldset class="login" >
                <legend class="login-legend" align="center"> &nbsp; &nbsp; ورود به قسمت مدیریت &nbsp;</legend>
                <input type="text" name="txtusername" id="txtusername"  class="form_input" placeholder=" نام مدیر" required><br><br>
                <input type="password" name="txtpassword" id="txtpassword"  class="form_input" placeholder=" پسوورد " required><br><br>
                <input type="submit" value="ورود به سیستم"  class="button">
                <!-- <p><a href="#" onclick="showHide('hidden_div'); return false;" id="password">Forgot Password?</a></p>-->
                 <!--div id="hidden_div" style="display: none;"> 
                 <label><span>Enter Your Alternative Email Address</span></label><br><br>
                  <input type="email" name="email" id="txtusername"  class="form-input" placeholder=" E-mail Address"><br><br>
                  <input type="submit" value="Send"  class="button">
                 </div-->
               </fieldset>
            </form>  
        </div>  
      </div>
    </div>
  </section>
  <!--End main Section-->
</div><!--End main container--
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>
