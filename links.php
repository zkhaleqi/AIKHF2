<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->

<head>
<title>لینکهای مفید</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.sarathoos.com/">
<meta http-equiv="pics-label" content="http://www.wahdatdaily.com/images/wd-logo.png">
<meta name="publisher" content="http://www.wahdatdaily.com/">
<meta name="keywords" content="روزنامه وحدت، روزنامه مردم افغانستان, wahdat daily, afghanistan news, اخبار افغانستان, سایت خبری افغانستان, خبرهای تازه از افغانستان, اخبار داغ از افغانستان و منطقه,مقالات اجتماعی, مقالات اقتصادی,مقالات فرهنگی و علمی,اخبار جدید علمی">
<meta name="news_keywords" content="wahdat daily, روزنامه وحدت، اخبار اجتماعی، اقتصادی، سیاسی، اخبار لفغانستان و جهان">
<meta name="title" content="wahdat daily | روزنامه وحدت">
<meta name="description" content="سایت خبری: اجتماعی، اقتصادی، سیاسی مردم افغانستان، روزنامه وحدت با پوشش گسترده ویب سایت خبری مردم افغانستان">
<meta name="author" content="wahdat daily">
<!--OGM-->
<meta property="og:title" content="روزنامه وحدت" />
<meta property="og:site_name" content="روزنامه وحدت"/>
<meta property="og:url" content="http://www.wahdatdaily.com/" />
<meta property="og:description" content="سایت خبری: اجتماعی، اقتصادی، تحلیلی، سیاسی مردم افغانستان، روزنامه وحدت با پوشش گسترده ویب سایت خبری مردم افغانستان"/>
<meta property="og:type" content="Website" />
<meta property="og:locale" content="fa_AF" />  
<meta property="article:author" content="wahdat daily" />
<meta property="article:publisher" content="https://www.facebook.com/Wahdatdailynewspaper/"/>
<meta property="og:image" content="http://www.wahdatdaily.com/images/wd-logo.png">
 
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/style.css"> 
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="pagination/css/pagination.css" type="text/css"><!--Paginatiion Styles-->

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
          <li class="first-page"><a href="index">صفحه نخست</a></li>
          <li><a href="reports">خبرها</a></li>
          <li><a href="politics">سیاسی</a></li>
          <li><a href="society">اجتماعی</a></li>
          <li><a href="economic">اقتصادی</a></li>
          <li><?php echo"<a href ='gallery?album=$album'>";?>عکس<?php echo '</a>';?></li>
          <li><a href="about">در باره ما</a></li>
          <li><a href="contact">ارتباط با ما</a></li>
          <?php include 'include/search.php';?>
        </ul>
    </nav><!--End Navigation Bar-->
    <?php }; ?>
</div><!--End head container-->
</header><!--End full width header-->

<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->
  <section id="main">
  
    <div class="grid_4" id="side-bar"><!--Sidebar-->
      <?php include 'include/side-bar2.php'; ?>
    </div> <!--End Side Bar-->
    
    <div class="grid_8" id="cat-content">
    <h1>لینکهای مشهور و مفید</h1>
    <hr class="side_break">
     <ul id="side-links">
        <?php
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM flinks  ORDER BY id ASC LIMIT 5,1000";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $id = $row['id'] ?>
        <li><a href="<?php echo 'http://'. $row['url'];?>" target="_blank" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></li>
        <?php }; ?>
      </ul>
    </div>
  </section><!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>
