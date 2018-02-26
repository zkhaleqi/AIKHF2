<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->
<?php
include 'dbcon.php';
$year =$_REQUEST['year'];
error_reporting(0);
$select = mysql_query("SELECT * FROM farticles WHERE year = '$year' ORDER BY id DESC LIMIT 0,1"); ?>
<?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
<?php $year = $row['year'] ?>
<head>
<title>آرشیف سالانه مطالب سال <?php echo $row['year']; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.codenavis.com/">
<meta http-equiv="pics-label" content="http://www.nahoorvoice.com/images/nahoor-voice.png">
<meta name="publisher" content="http://www.nohoorvoice.com/">
<meta name="keywords" content="ناهور وایس، اخبار ناهور، ولسوالی ناهور، ولایت غزنی، ولسوالی ناهور افغانستان، ولسوالی ناور، ناور، اخبار ولسوالی ناهور، اخبار ولسوالی ناور، اخبار تازه، اخبار تازه افغانستان، اخبار داغ افغانستان و منطقه، مقالات اقتصادی، مقالات و اخبار فرهنگی، اخبار علمی، اخبار پژوهشی، اخبار ناور، nahoorvoice, صدای ناهور، nahoor voice, nohoorvoice afghanistan, nahoor voice ghazni">
<meta name="news_keywords" content="nahoor voice, ناهور وایس ، اخبار اجتماعی، اقتصادی، سیاسی، اخبار لفغانستان و جهان">
<meta name="title" content="<?php echo $row['title']; ?>">
<meta name="description" content="<?php echo $row['headline']; ?>">
<meta name="author" content="<?php echo $row['author']; ?>">
<!--OGM-->
<meta property="og:title" content="<?php echo $row['title']; ?>" />
<meta property="og:site_name" content="ناهور وایس"/>
<meta property="og:url" content="http://www.nahoorvoice.com/" />
<meta property="og:description" content="<?php echo $row['headline']; ?>"/>
<meta property="og:type" content="Website" />
<meta property="og:locale" content="fa_AF" />  
<meta property="article:author" content="<?php echo $row['author']; ?>" />
<meta property="article:publisher" content="https://www.facebook.com/nahoorvoice/"/>
<meta property="og:image" content="http://www.nahoorvoice.com/kcfinder/files/images/<?php echo $row['thumb'];?>">
<?php }; ?>
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
    <?php  
		include 'dbcon.php';
		$year =$_REQUEST['year'];
		error_reporting(0);
		$sql = "SELECT year FROM farticles WHERE year = '$year' LIMIT 0,1";
		$rs_result = mysql_query ($sql, $con); 
		while ($row = mysql_fetch_assoc($rs_result)) { 
		?>
    <h1>آرشیف مطالب سال <?php echo $row['year'];?> به ترتیب تاریخ نشر</h1>
    <?php }; ?>
    <?php
         include 'dbcon.php';
		$year =$_REQUEST['year'];
		error_reporting(0);
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
		$start_from = ($page-1) * 10;
		$select = mysql_query("SELECT * FROM farticles WHERE year = '$year' AND category !='Others' AND status='show' ORDER BY id DESC LIMIT $start_from, 10 "); ?>
		<?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
		<?php $year = $row['year'] ?>
		<?php $date = $row['date'] ?>
		<?php $title = $row['title'] ?>
		<?php $subcategory = $row['subcategory'] ?>    
		<?php $category = $row['category'] ?>
		<?php $id = $row['id'] ?>
      <dl>
        <dt class="first"><img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="200" height="120" alt=""/></dt>
        <dd>
          <h2><?php echo"<a href ='post?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h2>
          <p>
           <?php
              $s = $row['headline'];
              $max_length = 400;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
		  <?php echo"<a href ='post?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
          </p>
          <p id="metadata">
          <span class="meta-data"><?php echo $row['fdate'];?> | <?php echo $row['author'];?></span>
          </p>
        </dd>
      </dl>
      <?php }; ?>
      
      <div class="pagination" align="center">
        <!--Page Numbeers-->
	   <?php include 'pagination/annuals-page.php';?>
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
