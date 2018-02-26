<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->

<head>
<title>فرهنگ و هنر</title>
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
          <li class="first-page"><a href="index.php">صفحه نخست</a></li>
          <li><a href="reports.php">خبرها</a></li>
          <li><a href="politics.php">سیاسی</a></li>
          <li><a href="society.php">اجتماعی</a></li>
          <li><a href="economic.php">اقتصادی</a></li>
          <li class="selected"><a href="culture.php">فرهنگ/ هنر</a></li>
          <li><a href="villages.php">دهکده ها</a></li>
          <li><?php echo"<a href ='gallery.php?album=$album'>";?>عکس<?php echo '</a>';?></li>
          <li><a href="about.php">در باره ما</a></li>
          <li><a href="contact.php">ارتباط با ما</a></li>
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
    <h1>مطالب فرهنگی و هنری به ترتیب تاریخ نشر</h1>
      <?php
          include 'dbcon.php';
          error_reporting(0);
		  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
		  $start_from = ($page-1) * 10; 
		  $sql = "SELECT * FROM farticles WHERE subcategory='Culture' AND status='show' ORDER BY id DESC LIMIT $start_from, 10";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
         <?php $id = $row['id'] ?>
         <?php $title = $row['title'] ?>
         <?php $subcategory = $row['subcategory'] ?>    
         <?php $category = $row['category'] ?>
         <?php $title = $row['title'] ?>
      <dl>
        <dt class="first"><img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="200" height="120" alt=""/></dt>
        <dd>
          <h2><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h2>
          <p>
           <?php
              $s = $row['headline'];
              $max_length = 400;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
		  <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
          </p>
          <p id="metadata">
          <span class="meta-data"><?php echo $row['fdate'];?> | <?php echo $row['author'];?></span>
          </p>
        </dd>
      </dl>
      <?php }; ?>
      
      <div class="pagination" align="center">
        <!--Page Numbeers-->
	   <?php include 'pagination/culture-page.php';?>
       <!--Page Numbeers--> 
      </div>
    </div>
  </section><!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>
